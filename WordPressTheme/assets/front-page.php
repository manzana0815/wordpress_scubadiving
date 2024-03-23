<?php get_header(); ?>
<main>
  <!-- TOP-MV -->
  <div class="top-mv">
    <div class="top-mv__swiper swiper js-top-mv-swiper">
      <div class="top-mv__items swiper-wrapper">
        <?php $mv_slider = SCF::get("mv_slider_images");
        foreach ($mv_slider as $fields) {
          $image_pc_url = wp_get_attachment_url($fields["slider_pc"]);
          $image_sp_url = wp_get_attachment_url($fields["slider_sp"]);
          $image_alt = get_post_meta(get_the_ID(), 'slide_alt', true);

          if (!empty($image_sp_url && $image_pc_url)) { ?>
            <div class="top-mv__item swiper-slide">
              <div class="top-mv__img">
                <picture>
                  <source srcset="<?php echo esc_url($image_pc_url); ?>" media="(min-width :767px)" type="image/webp">
                  <img src="<?php echo esc_url($image_sp_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                </picture>
              </div>
            </div>
        <?php }
        } ?>


      </div>

      <div class="top-mv__title-block">
        <h2 class="top-mv__title">diving</h2>
        <span class="top-mv__sub-title">into the ocean</span>
      </div>
    </div>
  </div>


  <!-- //TOP-CAMPAIGN -->
  <section class="top-campaign top-campaign-layout">
    <div class="top-campaign__inner inner">
      <div class="top-campaign__section-title section-title">
        <span class="section-title__en">campaign</span>
        <h2 class="section-title__jp">キャンペーン</h2>
      </div>
      <!-- Swiper -->
      <div class="top-campaign__container">
        <!-- Slider main container -->
        <div class="top-campaign__swiper swiper js-top-campaign-swiper">
          <!-- Additional required wrapper -->
          <div class="top-campaign__cards swiper-wrapper">
            <?php
            $wp_query = new WP_Query();
            $my_posts = array(
              'post_type' => 'campaign',
              'posts_per_page' => '-1',
            );
            $wp_query->query($my_posts);
            if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
                <!-- Slides -->
                <div class="top-campaign__card campaign-card swiper-slide">
                  <div class="campaign-card__img">
                    <picture>
                      <source srcset="<?php the_post_thumbnail_url("full"); ?>" />
                      <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>の画像">
                    </picture>
                  </div>

                  <div class="campaign-card__body">
                    <div class="campaign-card__category category">
                      <?php
                      $categories = get_the_category();
                      if (!empty($categories)) {
                        echo esc_html($categories[0]->name);
                      } else {
                        echo 'カテゴリーなし';
                      }
                      ?>
                    </div>
                    <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                  </div>
                  <div class="campaign-card__content">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <?php
                      // スマートカスタムフィールドから値を取得し、float型にキャスト
                      $regular_price = floatval(SCF::get('regular_price'));
                      $discounted_price = floatval(SCF::get('discounted_price'));
                      ?>
                      <span class="campaign-card__price-regular">&yen;<?php echo number_format($regular_price); ?></span>
                      <span class="campaign-card__price-discounted">&yen;<?php echo number_format($discounted_price); ?></span>
                    </div>
                  </div>
                </div>

            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>

          </div>
        </div>

        <div class="top-campaign__swiper-button">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>

      <div class="top-campaign__btn">
        <a href="<?php echo esc_url(home_url('/')); ?>campaign" class="btn">view more<span></span></a>
      </div>
    </div>
  </section>

  <!-- //TOP-ABOUT -->
  <section class="top-about top-about-layout">
    <div class="top-about__inner inner">
      <div class="top-about__section-title section-title">
        <span class="section-title__en">about us</span>
        <h2 class="section-title__jp">私たちについて</h2>
      </div>
      <div class="top-about__images">
        <div class="top-about__img-left">
          <picture>
            <!-- ブラウザが767px以下かつwebpに対応している場合 -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-about-sp_01.webp" media="(max-width: 767px)" type="image/webp">
            <!-- ブラウザが768px以上かつwebpに対応している場合 -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-about-pc_01.webp" media="(min-width: 768px)" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-about-sp_01.jpg" alt="シーサーの写真">
          </picture>
        </div>

        <div class="top-about__img-right">
          <picture>
            <!-- ブラウザが767px以下かつwebpに対応している場合 -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-about-sp_02.webp" media="(max-width: 767px)" type="image/webp">
            <!-- ブラウザが768px以上かつwebpに対応している場合 -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-about-pc_02.webp" media="(min-width: 768px)" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-about-sp_02.jpg" alt="黄色の熱帯業の写真">
          </picture>
        </div>
      </div>

      <div class="top-about__contents">
        <h3 class="top-about__contents-title">Dive into<br>the Ocean</h3>
        <div class="top-about__content">
          <div class="top-about__text">
            <p class="text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>

          <div class="top-about__btn">
            <a href="<?php echo esc_url(home_url('/')); ?>about" class="btn">view more<span></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- //TOP-INFO -->
  <section class="top-info top-info-layout">
    <div class="top-info__inner inner">
      <div class="top-info__section-title section-title">
        <span class="section-title__en">information</span>
        <h2 class="section-title__jp">ダイビング情報</h2>
      </div>

      <div class="top-info__wrapper">
        <div class="top-info__content">
          <h3 class="top-info__content-title">ライセンス講習</h3>
          <div class="top-info__text">
            <p class="text">
              当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
              正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
            </p>
          </div>
        </div>

        <div class="top-info__img color-box js-color-box">
          <picture>
            <!-- ブラウザがwebpに対応している場合 -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-info.webp" media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-info.jpg" alt="オレンジ色の熱帯魚と珊瑚の写真">
          </picture>
        </div>
      </div>

      <div class="top-info__btn">
        <a href="<?php echo esc_url(home_url('/')); ?>information" class="btn">view more<span></span></a>
      </div>
    </div>
  </section>

  <!-- //TOP-BLOG -->
  <section class="top-blog top-blog-layout">
    <div class="top-blog__inner inner">
      <div class="top-blog__section-title section-title">
        <span class="section-title__en section-title__en--wh">blog</span>
        <h2 class="section-title__jp section-title__jp--wh">ブログ</h2>
      </div>

      <ul class="top-blog__cards blog-cards">
        <?php
        $wp_query = new WP_Query();
        $my_posts = array(
          'post_type' => 'post',
          'posts_per_page' => '3',
        );
        $wp_query->query($my_posts);
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
            <li class="blog-cards__item blog-card js-hover-scale">
              <a href="#">
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
        endif;
        wp_reset_postdata(); ?>
      </ul>

      <div class="top-blog__btn">
        <a href="<?php echo esc_url(home_url('/')); ?>blog" class="btn">view more<span></span></a>
      </div>
    </div>
  </section>

  <!-- //TOP-VOICE -->
  <section class="top-voice top-voice-layout">
    <div class="top-voice__inner inner">
      <div class="top-voice__section-title section-title">
        <span class="section-title__en">voice</span>
        <h2 class="section-title__jp">お客様の声</h2>
      </div>

      <ul class="top-voice__cards voice-cards">
        <?php
        $wp_query = new WP_Query();
        $my_posts = array(
          'post_type' => 'voice',
          'posts_per_page' => '2',
        );
        $wp_query->query($my_posts);
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
            <li class="voice-cards__item voice-card">
              <div class="voice-card__body">
                <div class="voice-card__header">
                  <div class="voice-card__meta">
                    <span class="voice-card__gender">
                      <?php
                      the_field("age");
                      ?>
                      (
                      <?php
                      the_field("gender")0118;
                      ?>
                      )
                    </span>
                    <span class="voice-card__category category">
                      <?php
                      $categories = get_the_category();
                      if (!empty($categories)) {
                        echo esc_html($categories[0]->name);
                      } else {
                        echo 'カテゴリーなし';
                      }
                      ?>
                    </span>
                  </div>
                  <h3 class=" voice-card__title"><?php the_title(); ?></h3>
                </div>
                <div class="voice-card__img color-box js-color-box">
                  <picture>
                    <!-- ブラウザがwebpに対応している場合 -->
                    <source srcset="<?php the_post_thumbnail_url("full"); ?>" type="image/webp">
                    <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  </picture>
                </div>
              </div>
              <div class="voice-card__content">
                <p class="voice-card__text text">
                  <?php the_excerpt(); ?>
                </p>
              </div>
            </li>

        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
      </ul>

      <div class="top-voice__btn">
        <a href="<?php echo esc_url(home_url('/')); ?>voice" class="btn">view more<span></span></a>
      </div>
    </div>

  </section>

  <!-- //TOP-PRICE -->
  <section class="top-price top-price-layout">
    <div class="top-price__inner inner">
      <div class="top-price__section-title section-title">
        <span class="section-title__en">price</span>
        <h2 class="section-title__jp">料金一覧</h2>
      </div>

      <div class="top-price__wrapper">
        <div class="top-price__img color-box js-color-box">
          <picture>
            <!-- 画面幅が768px以上かつブラウザがwebpに対応している場合 -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-price-pc.webp" media="(min-width: 768px)" type="image/webp" />
            <!-- 画面幅が768px以上かつブラウザがwebpに対応していない場合 -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-price-pc.jpg" media="(min-width: 768px)" />
            <!-- 画面幅が767px以下かつブラウザがwebpに対応している場合 -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-price-sp.webp" media="(max-width: 767px)" type="image/webp" />
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-price-sp.jpg" alt="ウミガメの写真" />
          </picture>
        </div>

        <div class="top-price__table">
          <div class="top-price__list-items">
            <p class="top-price__list-title">ライセンス講習</p>
            <dl>
              <!-- page-price。phpのカスタムフィールドから値を取得 -->
              <?php $course_01 = SCF::get("course_01", 22);
              foreach ($course_01 as $fields) { ?>
                <div class="top-price__list-item">
                  <dt><?php echo $fields["course_01_menu"]; ?></dt>
                  <dd>
                    &yen;
                    <?php $price = floatval($fields["course_01_price"]);
                    echo number_format($price);
                    ?>
                  </dd>
                </div>
              <?php } ?>
            </dl>
          </div>

          <div class="top-price__list-items">
            <p class="top-price__list-title">体験ダイビング</p>
            <dl>
              <?php $course_02 = SCF::get("course_02", 22);
              foreach ($course_02 as $fields) { ?>
                <div class="top-price__list-item">
                  <dt><?php echo $fields["course_02_menu"]; ?></dt>
                  <dd>
                    &yen;
                    <?php $price = floatval($fields["course_02_price"]);
                    echo number_format($price);
                    ?>
                  </dd>
                </div>
              <?php } ?>
            </dl>
          </div>

          <div class="top-price__list-items">
            <p class="top-price__list-title">ファンダイビング</p>
            <dl>
              <?php $course_03 = SCF::get("course_03", 22);
              foreach ($course_03 as $fields) { ?>
                <div class="top-price__list-item">
                  <dt><?php echo $fields["course_03_menu"]; ?></dt>
                  <dd>
                    &yen;
                    <?php $price = floatval($fields["course_03_price"]);
                    echo number_format($price);
                    ?>
                  </dd>
                </div>
              <?php } ?>

            </dl>
          </div>

          <div class="top-price__list-items">
            <p class="top-price__list-title">スペシャルダイビング</p>
            <dl>
              <?php $course_04 = SCF::get("course_04", 22);
              foreach ($course_04 as $fields) { ?>
                <div class="top-price__list-item">
                  <dt><?php echo $fields["course_04_price"]; ?></dt>
                  <dd>&yen;24,000</dd>
                </div>
                <div class="top-price__list-item">
                  <dt>1日ダイビング(3ダイブ)</dt>
                  <dd>&yen;
                    <?php $price = floatval($fields["course_04_price"]);
                    echo number_format($price);
                    ?>
                  </dd>
                </div>
              <?php } ?>
            </dl>
          </div>
        </div>
      </div>

      <div class="top-price__btn">
        <a href="<?php echo esc_url(home_url('/')); ?>price" class="btn">view more<span></span></a>
      </div>
    </div>
  </section>

  <?php get_template_part("parts/contact-section"); ?>
  <?php get_footer(); ?>
