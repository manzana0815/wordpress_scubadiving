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
  }https://discord.com/channels/906834869584289792/1095933250024775680

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


add_action('widgets_init', function () {
  register_sidebar(array(
    'name' => 'サイドバー', // 管理画面のウィジェットエリアの名称
    'id' => 'sidebar', // ウィジェットエリアの識別名称（出力時にも使用）
    'description' => 'サイドバーのテンプレートパーツ', // 管理画面のウィジェットエリアの説明文
    'before_widget' => '<section id="%1$s" class="aside__ %2$s">', // ウィジェットを囲むdivの開始タグ
    'after_widget' => '</section>', // ウィジェットを囲むdivの終了タグ
    'before_title' => '<h3 class="aside__title">', // ウィジェットタイトルを囲むh3の開始タグ
    'after_title' => '</h3>', // ウィジェットタイトルを囲むh3の終了タグ
  ));
});

function mobile_break_shortcode() {
  // front-page.phpでの表示時は改行ショートコードを無効にする
  if (is_front_page()) {
      return '';
  } else {
      return '<br class="u-mobile">';
  }
}
add_shortcode('sp_br', 'mobile_break_shortcode');


function generate_information_tabs_menu() {
  $page_id = get_page_by_path('information')->ID;
  $diving_info = get_field('diving_info', $page_id);

  $menu = '<ul class="nav__sub-items">';
  if ($diving_info) {
      // タイトルが設定されている要素のみをカウント
      for ($i = 1; $i <= count($diving_info) / 3; $i++) {
          if (!empty($diving_info["info_title_{$i}"])) { // タイトルが存在するかチェック
              $tabId = 'tab' . sprintf('%02d', $i);
              $info_title = $diving_info["info_title_{$i}"];
              $menu .= '<li class="nav__sub-item"><a href="' . esc_url(get_permalink($page_id) . '#' . $tabId) . '">' . esc_html($info_title) . '</a></li>';
          }
      }
  }
  $menu .= '</ul>';

  return $menu;
}
add_shortcode('information_tabs_menu', 'generate_information_tabs_menu');
