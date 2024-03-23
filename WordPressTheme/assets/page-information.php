<?php get_header(); ?>
<main>
  <!-- SUB-MV -->
  <div class="sub-mv">
    <div class="sub-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/info-mv-sp.webp" media="(max-width:767px)" type="image/webp">
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/info-mv-pc.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/info-mv-pc.jpg" media="(min-width:768px)" type="image/webp">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/info-mv-sp.jpg" alt="黄色2匹の熱帯魚の写真">
      </picture>
    </div>

    <div class="sub-mv__title sub-title">
      <h1 class=" sub-title__title">information</h1>
    </div>
  </div>

  <!-- BREADCRUMBS -->
  <?php get_template_part("parts/breadcrumb"); ?>

  <!-- INFORMATION -->
  <div class="info info-layout">
    <div class="info__inner inner">

      <ul class="info__tabs">
        <li class="info__tab tab js-tab active" data-number="tab01" data-url="/path-to-ライセンス講習"><a href="#tab01"><span><?php echo $info_01_title; ?></span></a></li>
        <li class="info__tab tab js-tab" data-number="tab02"><a href="#tab02"><span>体験<br class="u-mobile">ダイビング</span></a></li>
        <li class="info__tab tab js-tab" data-number="tab03"><a href="#tab03"><span>ファン<br class="u-mobile">ダイビング</span></a></li>
      </ul>

      <div class="info__cards">
        <?php
        $info_01_text = SCF::get('info_01_text');
        $info_02_text = SCF::get('info_02_text');
        $info_03_text = SCF::get('info_03_text');
        $info_01_image = SCF::get('info_01_image');
        $info_02_image = SCF::get('info_02_image');
        $info_03_image = SCF::get('info_03_image');
        ?>

        <div id="tab01" class="info__card info-card js-info-card active">
          <div class="info-card__wrapper">
            <div class="info-card__content">
              <h3 class="info-card__title"><?php echo $info_01_title; ?></h3>
              <p class="info-card__text text">
                <?php echo $info_02_text; ?>
              </p>
            </div>
            <picture class="info-card__img">
              <img src="<?php echo $info_01_image; ?>" alt="<?php echo $info_01_title ?>のアイキャッチ画像">
            </picture>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part("parts/contact-section"); ?>
  <?php get_footer(); ?>
