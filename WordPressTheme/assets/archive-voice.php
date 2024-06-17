<?php get_header(); ?>
<main>
  <!-- SUB-MV -->
  <div class="sub-mv">
    <div class="sub-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/voice-mv-sp.webp" media="(max-width:767px)" type="image/webp">
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/voice-mv-pc.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/voice-mv-pc.jpg" media="(min-width:768px)" type="image/webp">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/voice-mv-sp.jpg" alt="ダイバーの集合写真">
      </picture>
    </div>

    <div class="sub-mv__title sub-title">
      <h1 class="sub-title__title">voice</h1>
    </div>
  </div>

  <!-- BREADCRUMBS -->
  <?php get_template_part("parts/breadcrumbs"); ?>

  <!-- VOICE  -->
  <div class="voice section-layout">
    <div class="voice__inner inner">
      <ul class="voice__categories categories">
        <li class="categories__item category category--lg current"><a href="#">all</a></li>
        <?php
        // カテゴリー情報を取得
        $categories = get_categories(array(
          'orderby' => 'name',
          'order'   => 'ASC'
        ));

        // 各カテゴリーに対してループ
        foreach ($categories as $category) {
          // カテゴリーへのリンクを取得
          $category_link = get_category_link($category->term_id);

          // リストアイテムとしてカテゴリーを出力
          echo '<li class="categories__item category category--lg"><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></li>';
        }
        ?>
      </ul>

      <ul class="voice__cards">
        <?php if (have_posts()) : while (have_posts()) : the_post();
            $customer_voice = get_field('customer_voice');
            if ($customer_voice) :
              $customer_info = $customer_voice['customer_info'];
              $customer_image = $customer_voice['customer_image'];
              $voice_title = $customer_voice['voice_title'];
              $voice_text = $customer_voice['voice_text'];
        ?>
              <li class="voice-cards__item voice-card">
                <div class="voice-card__body">
                  <div class="voice-card__header">
                    <div class="voice-card__meta">
                      <span class="voice-card__gender">
                        <?php echo esc_html($customer_info["age"]); ?> (<?php echo esc_html($customer_info["group"]); ?>)
                      </span>
                      <span class="voice-card__category category">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                          echo esc_html($categories[0]->name);
                        } else {
                          echo 'カテゴリーなし';
                        }
                        ?>
                      </span>
                    </div>
                    <h3 class=" voice-card__title"><?php echo esc_html($voice_title); ?></h3>
                  </div>
                  <div class="voice-card__img">
                    <picture>
                      <img src="<?php echo esc_url($customer_image); ?>" alt="<?php echo esc_attr($voice_title); ?>のアイキャッチ画像">
                    </picture>
                  </div>
                </div>
                <div class="voice-card__content">
                  <p class="voice-card__text text">
                    <?php echo esc_html($voice_text); ?>
                  </p>
                </div>
              </li>

        <?php
            endif;
          endwhile;
        endif; ?>
      </ul>

      <div class="voice__pagenavi wp-pagenavi">
        <a class="previouspostslink" rel="prev" href="#"></a>
        <?php wp_pagenavi(); ?>
        <a class="nextpostslink" rel="next" href="#"></a>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
