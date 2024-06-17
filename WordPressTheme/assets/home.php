<?php get_header(); ?>

<main>
  <!-- SUB-MV -->
  <div class="sub-mv">
    <div class="sub-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog-mv-sp.webp" media="(max-width:767px)" type="image/webp">
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog-mv-pc.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog-mv-pc.jpg" media="(min-width:768px)" type="image/webp">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog-mv-sp.jpg" alt="黄色2匹の熱帯魚の写真">
      </picture>
    </div>

    <div class="sub-mv__title sub-title">
      <h1 class="sub-title__title">blog</h1>
    </div>
  </div>

  <!-- BREADCRUMBS -->
  <?php get_template_part("parts/breadcrumb"); ?>

  <!-- blog -->
  <div class="two-column section-layout">
    <div class="two-column__inner inner">
      <div class="two-column__wrapper">
        <div class="two-column__main-content">
          <ul class="two-column__card-items blog-cards blog-cards--two-column">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li class="blog-cards__item blog-card js-hover-scale">
                  <a href="<?php the_permalink(); ?>">
                    <div class="blog-card__body">
                      <div class="blog-card__header">
                        <time class="blog-card__time" datetime="<?php the_time("c"); ?>"><?php the_time("Y.m.d"); ?></time>
                        <h3 class="blog-card__title"><?php the_title(); ?></h3>
                      </div>
                      <div class="blog-card__content">
                        <p class="blog-card__text text">
                          <?php the_excerpt(); ?>
                        </p>
                      </div>
                    </div>
                    <div class="blog-card__img">
                      <picture>
                        <?php if (get_the_post_thumbnail()) : ?>
                          <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                        <?php else : ?>
                          <img src="<?php echo get_theme_file_uri(); ?>/images/common/no_image.jpg" alt="noimage">
                        <?php endif; ?>
                      </picture>
                    </div>
                  </a>
                </li>
            <?php endwhile;
            endif; ?>
          </ul>

          <div class="two-column__pagenavi pagenavi wp-pagenavi">
            <a class="previouspostslink" rel="prev" href="#"></a>
            <?php wp_pagenavi(); ?>
            <a class="nextpostslink" rel="next" href="#"></a>
          </div>
        </div>

        <div class="two-column__aside-content">
          <?php get_template_part("parts/sidebar"); ?>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
