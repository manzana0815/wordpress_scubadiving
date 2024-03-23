<?php get_header(); ?>
<main>
  <!-- SUB-MV -->
  <div class="sub-mv">
    <div class="sub-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/about-mv-sp.webp" media="(max-width:767px)" type="image/webp" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/about-mv-pc.webp" media="(min-width:768px)" type="image/webp" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/about-mv-pc.jpg" media="(min-width:768px)" type="image/webp" />
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-mv-sp.jpg" alt="黄色2匹の熱帯魚の写真" />
      </picture>
    </div>

    <div class="sub-mv__title sub-title">
      <h1 class="sub-title__title">about us</h1>
    </div>
  </div>

  <!-- BREADCRUMBS -->
  <?php get_template_part("parts/breadcrumb"); ?>

  <!-- ABOUT -->
  <div class="about section-layout">
    <div class="about__inner inner">

      <div class="about__images">
        <div class="about__img-left">
          <picture>
            <!-- ブラウザが767px以下かつwebpに対応している場合 -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-about-sp_01.webp" media="(max-width: 767px)" type="image/webp" />
            <!-- ブラウザが768px以上かつwebpに対応している場合 -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-about-pc_01.webp" media="(min-width: 768px)" type="image/webp" />
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-about-sp_01.jpg" alt="シーサーの写真" />
          </picture>
        </div>

        <div class="about__img-right">
          <picture>
            <!-- ブラウザが767px以下かつwebpに対応している場合 -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-about-sp_02.webp" media="(max-width: 767px)" type="image/webp" />
            <!-- ブラウザが768px以上かつwebpに対応している場合 -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-about-pc_02.webp" media="(min-width: 768px)" type="image/webp" />
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-about-sp_02.jpg" alt="黄色の熱帯業の写真" />
          </picture>
        </div>
      </div>

      <div class="about__contents">
        <h3 class="about__contents-title">Dive into<br />the Ocean</h3>
        <div class="about__content">
          <div class="about__text">
            <p class="text">
             <?php the_content(); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- GALLERY -->
  <section class="gallery gallery-layout">
    <div class="gallery__inner inner">
      <div class="gallery__section-title section-title">
        <span class="section-title__en">gallery</span>
        <h2 class="section-title__jp">フォト</h2>
      </div>

      <div class="gallery__wrapper">
        <?php $gallery = SCF::get("gallery_images");
        foreach ($gallery as $fields) {
          // 画像IDから画像のURLを取得
          $image_url = wp_get_attachment_url($fields['gallery_image']);

          if (!empty($image_url)) { ?>
            <!-- 画像をクリックしてモーダルを表示 -->
            <div class="gallery__item gallery__item--vertical js-modal-trigger" data-src="<?php echo esc_url($image_url); ?>">
              <picture>
                <!-- 正しく画像URLを取得して表示 -->
                <img src="<?php echo esc_url($image_url); ?>" alt="Gallery Image">
              </picture>
            </div>
        <?php }
        } ?>



      </div>
    </div>


    <div class="gallery__modal modal js-modal">
      <div class="modal__inner inner">
        <div class="modal__content">
          <div class="modal__img"></div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part("parts/contact-section"); ?>
  <?php get_footer(); ?>
