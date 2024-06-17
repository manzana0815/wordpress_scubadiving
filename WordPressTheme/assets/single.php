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


  <!-- two-column -->
  <div class="two-column section-layout">
    <div class="two-column__inner inner">
      <div class="two-column__wrapper">
        <div class="two-column__sub-content">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="two-column__header">
                <time class="two-column__date" datetime="<?php the_time("c"); ?>"><?php the_time("Y.m.d"); ?></time>
                <h2 class="two-column__blog-title"><?php the_title(); ?></h2>
                <div class="two-column__mv">
                  <figure>
                    <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>の写真">
                  </figure>
                </div>
              </div>
              <div class="two-column__body">
                <p>
                  <?php the_content(); ?>
                </p>
                <figure>
                  <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>の写真">
                </figure>
                <p>
                  <?php the_content(); ?>
                </p>
                <ul>
                  <li>リスト1</li>
                  <li>リスト2</li>
                  <li>リスト3</li>
                </ul>
                <p>
                  <?php the_content(); ?>
                </p>
              </div>
          <?php endwhile;
          endif; ?>

          <div class="wp-pagenavi">
            <?php
            $prev = get_previous_post();
            if (!empty($prev)) {
              $prev_url = esc_url(get_permalink($prev->ID));
            }

            $next = get_next_post();
            if (!empty($next)) {
              $next_url = esc_url(get_permalink($next->ID));
            }
            ?>
            <div class="c-page-link__prev">
              <?php if (!empty($prev)) : ?>
                <a class="previouspostslink" rel="prev" href="<?php echo $prev_url ?>"></a>
              <?php endif; ?>
            </div>

            <div class="c-page-link__next">
              <?php if (!empty($next)) : ?>
                <a class="nextpostslink" rel="next" href="<?php echo $next_url ?>"></a>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <div class="two-column__aside-content">
          <?php get_template_part("parts/sidebar"); ?>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
