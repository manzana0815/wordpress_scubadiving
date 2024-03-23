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
        <li class="categories__item category category--lg"><a href="#">ライセンス講習</a></li>
        <li class="categories__item category category--lg"><a href="#">ファンダイビング</a></li>
        <li class="categories__item category category--lg"><a href="#">体験ダイビング</a></li>
      </ul>

      <ul class="voice__cards voice-cards">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li class="voice-cards__item voice-card">
              <div class="voice-card__body">
                <div class="voice-card__header">
                  <div class="voice-card__meta">
                    <span class="voice-card__gender">
                      <?php
                      the_field("age");
                      ?>
                      (
                      <?php
                      the_field("gender");
                      ?>
                      )
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
                  <h3 class=" voice-card__title"><?php the_title(); ?></h3>
                </div>
                <div class="voice-card__img">
                  <picture>
                    <!-- ブラウザがwebpに対応している場合 -->
                    <source srcset="<?php the_post_thumbnail_url("full"); ?>" type="image/webp">
                    <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  </picture>
                </div>
              </div>
              <div class="voice-card__content">
                <p class="voice-card__text text">
                  <?php the_content(); ?>
                </p>
              </div>
            </li>

        <?php endwhile;
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
