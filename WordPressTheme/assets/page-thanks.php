<?php get_header(); ?>
    <main>
      <!-- SUB-MV -->
      <div class="sub-mv">
        <div class="sub-mv__img">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/contact-mv-sp.webp" media="(max-width:767px)" type="image/webp">
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/contact-mv-pc.webp" media="(min-width:768px)" type="image/webp">
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/contact-mv-pc.jpg" media="(min-width:768px)" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/contact-mv-sp.jpg" alt="ビーチの写真">
          </picture>
        </div>

        <div class="sub-mv__title sub-title">
          <h1 class="sub-title__title">contact</h1>
        </div>
      </div>

   <!-- BREADCRUMBS -->
   <?php get_template_part("parts/breadcrumb"); ?>

      <!-- THANKS -->
      <div class="thanks section-layout">
        <div class="thanks__inner inner">
          <h2 class="thanks__title">お問い合わせ内容を送信完了しました。</h2>
          <p class="thanks__text">
            <?php the_content(); ?>
          </p>
        </div>
      </div>
    </main>

 <?php get_footer(); ?>
