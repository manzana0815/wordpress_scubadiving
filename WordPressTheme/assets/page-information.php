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
  <?php
  // diving_infoを取得
  $diving_info = get_field('diving_info');

  // 存在するタイトルの最大インデックスを求める
  $maxIndex = 0;
  if ($diving_info) {
    foreach ($diving_info as $key => $value) {
      if (preg_match('/^info_title_(\d+)$/', $key, $matches)) {
        $currentIndex = (int)$matches[1];
        if ($currentIndex > $maxIndex) {
          $maxIndex = $currentIndex;
        }
      }
    }
  }
  ?>

  <div class="info info-layout">
    <div class="info__inner inner">
      <ul class="info__tabs">
        <?php for ($i = 1; $i <= $maxIndex; $i++) : ?>
          <?php
          $tabId = sprintf('tab%02d', $i);
          // タブのタイトルでショートコードを解析
          // 管理画面上で設定したショートコードを含むタイトルを取得して表示
          $tab_title = do_shortcode($diving_info["tab_title_{$i}"] ?? 'タイトル未設定');
          ?>
          <li class="info__tab tab js-tab <?php if ($i == 1) echo 'active'; ?>" data-number="<?php echo $tabId; ?>">
            <a href="#<?php echo $tabId; ?>"><span><?php echo $tab_title; ?></span></a>
          </li>
        <?php endfor; ?>
      </ul>

      <div class="info__cards">
        <?php for ($i = 1; $i <= $maxIndex; $i++) : ?>
          <?php
          // info-card__titleではショートコードを解析せず、元のテキストをそのまま表示
          $info_title = $diving_info["info_title_{$i}"] ?? 'タイトル未設定';
          $info_detail = $diving_info["info_detail_{$i}"] ?? null;
          $info_image = $diving_info["info_image_{$i}"] ?? null;
          $tabId = sprintf('tab%02d', $i);
          ?>
          <?php if ($info_title && $info_detail && $info_image) : ?>
            <div id="<?php echo $tabId; ?>" class="info__card info-card js-info-card <?php if ($i == 1) echo 'active'; ?>">
              <div class="info-card__wrapper">
                <div class="info-card__content">
                  <!-- ここではdo_shortcode()を使わず、ショートコードを解析しない -->
                  <h3 class="info-card__title"><?php echo esc_attr($info_title); ?></h3>
                  <p class="info-card__text text"><?php echo esc_html($info_detail); ?></p>
                </div>
                <picture class="info-card__img">
                  <img src="<?php echo esc_url($info_image); ?>" alt="<?php echo esc_attr($info_title); ?>">
                </picture>
              </div>
            </div>
          <?php endif; ?>
        <?php endfor; ?>
      </div>
    </div>
  </div>


  </div>
  </div>


  <?php get_template_part("parts/contact-section"); ?>
  <?php get_footer(); ?>
