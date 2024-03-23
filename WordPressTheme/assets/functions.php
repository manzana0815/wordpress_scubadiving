<?php

function my_custom_theme_scripts()
{
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null, 'all');

  // Swiper CSS
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), null, 'all');

  // Theme CSS
  wp_enqueue_style('theme-style', get_theme_file_uri('/css/style.css'), array(), filemtime(get_theme_file_path('/css/style.css')), 'all');

  // jQuery (WordPress includes its own version of jQuery, this might not be necessary)
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true);

  // jQuery Inview
  wp_enqueue_script('jquery-inview', get_theme_file_uri('/js/jquery.inview.min.js'), array('jquery'), filemtime(get_theme_file_path('/js/jquery.inview.min.js')), true);

  // Swiper JS
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array('jquery'), null, true);

  // Theme Script
  wp_enqueue_script('theme-script', get_theme_file_uri('/js/script.js'), array('jquery'), filemtime(get_theme_file_path('/js/script.js')), true);
}

add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

function my_setup()
{
  add_theme_support('post-thumbnails'); /* アイキャッチ */
  add_theme_support('automatic-feed-links'); /* RSSフィード */
  add_theme_support('title-tag'); /* タイトルタグ自動生成 */
  add_theme_support(
    'html5',
    array( /* HTML5のタグで出力 */
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

// 改行の自動挿入を禁止する

// アーカイブの表示件数変更
function change_posts_per_page($query)
{
  if (is_admin() || !$query->is_main_query())
    return;

  if ($query->is_post_type_archive('campaign')) { // 'campaign' カスタム投稿タイプのアーカイブを指定
    $query->set('posts_per_page', '4'); // 表示件数を4件に指定
  }

  if ($query->is_post_type_archive('voice')) { // 'voice' カスタム投稿タイプのアーカイブを指定
    $query->set('posts_per_page', '6'); // 表示件数を6件に指定
  }
}
add_action('pre_get_posts', 'change_posts_per_page');

//投稿記事で自動挿入されるpタグ、brタグを削除 
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
remove_filter('the_title', 'wpautop');  
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

// 管理画面のカスタム投稿一覧にカテゴリー(ターム)を表示
function add_custom_column($defaults)
{
  $defaults['diving_course'] = 'ダイビングコース'; // 『area』はタクソノミースラッグ(複数設定可)
  return $defaults;
}
add_filter('manage_course_posts_columns', 'add_custom_column'); // ここの『news』はカスタム投稿タイプスラッグ
function add_custom_column_id($column_name, $id)
{
  $terms = get_the_terms($id, $column_name);
  if ($terms && !is_wp_error($terms)) {
    $course_links = array(); //
    foreach ($terms as $term) {
      $news_links[] = $term->name;
    }
    echo join(", ", $news_links);
  }
}
add_action('manage_news_posts_custom_column', 'add_custom_column_id', 10, 2); // ここの『news』はカスタム投稿タイプスラッグ

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

add_filter('jpeg_quality', function ($arg) {
  return 100;
});


function my_custom_widget_area()
{
  register_sidebar(array(
    'name'          => esc_html__('カスタムウィジェットエリア', 'text_domain'),
    'id'            => 'custom-widget-area',
    'description'   => esc_html__('ここにウィジェットを追加します。', 'text_domain'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'my_custom_widget_area');
