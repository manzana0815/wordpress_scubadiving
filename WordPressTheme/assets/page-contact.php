<?php get_header(); ?>
  <main>
    <!-- SUB-MV -->
    <div class="sub-mv">
      <div class="sub-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/contact-mv-sp.webp" media="(max-width:767px)" type="image/webp">
          <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/contact-mv-pc.webp" media="(min-width:768px)" type="image/webp">
          <source srccset="<?php echo get_theme_file_uri(); ?>/images/common/contact-mv-pc.jpg" media="(min-width:768px)" type="image/webp">
          <img src="<?php echo get_theme_file_uri(); ?>/images/common/contact-mv-sp.jpg" alt="ビーチの写真">
        </picture>
      </div>

      <div class="sub-mv__title sub-title">
        <h1 class="sub-title__title">contact</h1>
      </div>
    </div>

<!-- BREADCRUMBS -->
<?php get_template_part("parts/breadcrumb"); ?>


    <!-- CONTACT -->
    <div class="contact section-layout">
      <div class="contact__inner inner">
        <div class="contact__content">
          <p class="contact__error-message">必須項目が入力されていません。<br class="u-mobile">入力してください。</p>
          <form target="_self" method="POST" id="form" class="contact__form form">
          <?php echo do_shortcode('[contact-form-7 id="3572d39" title="お問い合わせ"]') ?>

          </form>
        </div>
      </div>
    </div>

 <?php get_footer(); ?>
