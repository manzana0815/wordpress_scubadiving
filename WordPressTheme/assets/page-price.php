<?php get_header(); ?>

<main>
  <!-- SUB-MV -->
  <div class="sub-mv">
    <div class="sub-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/price-mv-sp.webp" media="(max-width:767px)" type="image/webp">
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/price-mv-pc.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/price-mv-pc.jpg" media="(min-width:768px)" type="image/webp">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/price-mv-sp.jpg" alt="ダイバーの集合写真">
      </picture>
    </div>

    <div class="sub-mv__title sub-title">
      <h1 class="sub-title__title">price</h1>
    </div>
  </div>

  <!-- BREADCRUMBS -->
  <?php get_template_part("parts/breadcrumb"); ?>

  <!-- PRICE  -->
  <section class="price section-layout">
    <div class="price__inner inner">
      <div class="price__items table">
        <div class="table__item" id="price01">
          <h3 class="table__title"><span>ライセンス講習</span></h3>
          <dl class="table__cells">
            <?php $course_01 = SCF::get("course_01");
            foreach ($course_01 as $fields) { ?>
              <div class="table__row">
                <dt><?php echo do_shortcode($fields["course_01_title"]); ?></dt>
                <!-- 管理画面で入力された数字を￥マークとカンマ付きで出力 -->
                <dd>&yen;<?php
                          $price = floatval($fields["course_01_price"]);
                          echo number_format($price);
                          ?></dd>
              </div>
            <?php } ?>
          </dl>
        </div>
        <div class="table__item" id="price02">
          <h3 class="table__title"><span>体験ダイビング</span></h3>
          <dl class="table__cells">
            <?php $course_02 = SCF::get("course_02");
            foreach ($course_02 as $fields) { ?>
              <div class="table__row">
                <dt><?php echo do_shortcode($fields["course_02_title"]); ?></dt>
                <!-- 管理画面で入力された数字を￥マークとカンマ付きで出力 -->
                <dd>&yen;<?php
                          $price = floatval($fields["course_02_price"]);
                          echo number_format($price);
                          ?>
                </dd>
              </div>
            <?php } ?>
          </dl>
        </div>

        <div class="table__item" id="price03">
          <h3 class="table__title"><span>ファンダイビング</span></h3>
          <dl class="table__cells">
            <?php $course_03 = SCF::get("course_03");
            foreach ($course_03 as $fields) { ?>
              <div class="table__row">
                <dt><?php echo do_shortcode($fields["course_03_title"]); ?></dt>
                <!-- 管理画面で入力された数字を￥マークとカンマ付きで出力 -->
                <dd>&yen;<?php
                          $price = floatval($fields["course_03_price"]);
                          echo number_format($price);
                          ?></dd>
              </div>
            <?php } ?>
          </dl>
        </div>

        <div class="table__item" id="price04">
          <h3 class="table__title"><span>スペシャルダイビング</span></h3>
          <dl class="table__cells">
            <?php $course_04 = SCF::get("course_04");
            foreach ($course_04 as $fields) { ?>
              <div class="table__row">
                <dt><?php echo do_shortcode($fields["course_04_title"]); ?></dt>
                <!-- 管理画面で入力された数字を￥マークとカンマ付きで出力 -->
                <dd>&yen;<?php
                          $price = floatval($fields["course_04_price"]);
                          echo number_format($price);
                          ?></dd>
              </div>
            <?php } ?>
          </dl>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>
