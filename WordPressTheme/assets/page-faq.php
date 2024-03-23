<?php get_header(); ?>
<main>
  <!-- SUB-MV -->
  <div class="sub-mv">
    <div class="sub-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/faq-mv-sp.webp" media="(max-width:767px)" type="image/webp">
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/faq-mv-pc.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/faq-mv-pc.jpg" media="(min-width:768px)" type="image/webp">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/faq-mv-sp.jpg" alt="ダイバーの集合写真">
      </picture>
    </div>

    <div class="sub-mv__title sub-title">
      <h1 class="sub-title__title sub-title__title--capital">faq</h1>
    </div>
  </div>

  <!-- BREADCRUMBS -->
  <?php get_template_part("parts/breadcrumb"); ?>



  <!-- FAQ  -->
  <div class="faq section-layout">
    <div class="faq__inner inner">
      <div class="faq__wrapper">
        <div class="faq__accordion accordion">
          <!-- 以下、質問 1 から 7 まで同様の構造を繰り返す -->
          <?php $faq = SCF::get('faq');
          foreach ($faq as $fields) { ?>
            <div class="accordion__item">
              <div class="accordion__title js-accordion-title"><?php echo $fields["question"]; ?></div>
              <div class="accordion__answer is-active">
                <p class="accordion__text">
                  <?php echo $fields["answer"]; ?> </p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>

    </div>
  </div>

  <?php get_footer(); ?>
