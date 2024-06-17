<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="sub-mv">
      <div class="sub-mv__img">
        <picture>
          <source srcset="<?php the_post_thumbnail_url("full"); ?>" media="(max-width:767px)" type="image/webp">
          <source srcset="<?php the_post_thumbnail_url("full"); ?>" media="(min-width:768px)" type="image/webp">
          <source srcset="<?php the_post_thumbnail_url("full"); ?>" media="(min-width:768px)" type="image/webp">
          <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
        </picture>
      </div>

      <div class="sub-mv__title sub-title">
        <h1 class="sub-title__title"><?php the_title(); ?></h1>
      </div>
    </div>

    <?php get_template_part("parts/breadcrumb"); ?>

    <section class="fixed-page section-layout">
      <div class="fixed-page__inner inner">
        <?php the_content(); ?>
      </div>
    </section>
<?php endwhile;
endif; ?>

<?php get_template_part("parts/contact-section"); ?>

<?php get_footer(); ?>
