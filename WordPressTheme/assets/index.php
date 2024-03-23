<?php get_header(); ?>
  <main>
    <!-- TOP-MV -->
    <div class="top-mv">
      <div class="top-mv__swiper swiper js-top-mv-swiper">
        <div class="top-mv__items swiper-wrapper">

          <div class="top-mv__item swiper-slide">
            <div class="top-mv__img">
              <picture>
                <!-- 画面幅が768px以上かつブラウザがwebpに対応している場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-pc_01.webp" media="(min-width :768px)" type="image/webp">
                <!-- 画面幅が768px以上かつブラウザがwebpに対応していない場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-pc_01.jpg" media="(min-width :768px)">
                <!-- 画面幅が767px以下かつブラウザがwebpに対応している場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-sp_01.webp" media="(max-width :767px)" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-sp_01.jpg" alt="ウミガメの写真">
              </picture>
            </div>
          </div>

          <div class="top-mv__item swiper-slide">
            <div class="top-mv__img">
              <picture>
                <!-- 画面幅が768px以上かつブラウザがwebpに対応している場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-pc_02.webp" media="(min-width :768px)" type="image/webp">
                <!-- 画面幅が768px以上かつブラウザがwebpに対応していない場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-pc_02.jpg" media="(min-width :768px)">
                <!-- 画面幅が767px以下かつブラウザがwebpに対応している場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-sp_02.webp" media="(max-width :767px)" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-sp_02.jpg" alt="ウミガメとダイバーの写真">
              </picture>
            </div>
          </div>

          <div class="top-mv__item swiper-slide">
            <div class="top-mv__img">
              <picture>
                <!-- 画面幅が768px以上かつブラウザがwebpに対応している場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-pc_03.webp" media="(min-width :768px)" type="image/webp">
                <!-- 画面幅が768px以上かつブラウザがwebpに対応していない場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-pc_03.jpg" media="(min-width :768px)">
                <!-- 画面幅が767px以下かつブラウザがwebpに対応している場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-sp_03.webp" media="(max-width :767px)" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-sp_03.jpg" alt="ボートの写真">
              </picture>
            </div>
          </div>

          <div class="top-mv__item swiper-slide">
            <div class="top-mv__img">
              <picture>
                <!-- 画面幅が768px以上かつブラウザがwebpに対応している場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-pc_04.webp" media="(min-width :768px)" type="image/webp">
                <!-- 画面幅が768px以上かつブラウザがwebpに対応していない場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-pc_04.jpg" media="(min-width :768px)">
                <!-- 画面幅が767px以下かつブラウザがwebpに対応している場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-sp_04.webp" media="(max-width :767px)" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-mv-sp_04.jpg" alt="ビーチの写真">
              </picture>
            </div>
          </div>
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
              <!-- Slides -->
              <div class="top-campaign__card swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__img">
                    <picture>
                      <!-- ブラウザがwebpに対応している場合 -->
                      <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_01.webp" type="image/webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_01.jpg" alt="キャンペーンの画像01">
                    </picture>
                  </div>

                  <div class="campaign-card__body">
                    <div class="campaign-card__category category">ライセンス講習</div>
                    <h3 class="campaign-card__title">ライセンス取得</h3>
                  </div>
                  <div class="campaign-card__content">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <span class="campaign-card__price-regular">&yen;56,000</span>
                      <span class="campaign-card__price-discounted">&yen;46,000</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="top-campaign__card swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__img">
                    <picture>
                      <!-- ブラウザがwebpに対応している場合 -->
                      <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_02.webp" type="image/webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_02.jpg" alt="キャンペーンの画像02">
                    </picture>
                  </div>

                  <div class="campaign-card__body">
                    <div class="campaign-card__category category">体験ダイビング</div>
                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                  </div>
                  <div class="campaign-card__content">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <span class="campaign-card__price-regular">&yen;24,000</span>
                      <span class="campaign-card__price-discounted">&yen;18,000</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="top-campaign__card swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__img">
                    <picture>
                      <!-- ブラウザがwebpに対応している場合 -->
                      <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_03.webp" type="image/webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_03.jpg" alt="キャンペーンの画像03">
                    </picture>
                  </div>

                  <div class="campaign-card__body">
                    <div class="campaign-card__category category">体験ダイビング</div>
                    <h3 class="campaign-card__title">ナイトダイビング</h3>
                  </div>
                  <div class="campaign-card__content">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <span class="campaign-card__price-regular">&yen;10,000</span>
                      <span class="campaign-card__price-discounted">&yen;8,000</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="top-campaign__card swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__img">
                    <picture>
                      <!-- ブラウザがwebpに対応している場合 -->
                      <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_04.webp" type="image/webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_04.jpg" alt="キャンペーンの画像04">
                    </picture>
                  </div>

                  <div class="campaign-card__body">
                    <div class="campaign-card__category category">ファンダイビング</div>
                    <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                  </div>
                  <div class="campaign-card__content">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <span class="campaign-card__price-regular">&yen;20,000</span>
                      <span class="campaign-card__price-discounted">&yen;16,000</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="top-campaign__card swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__img">
                    <picture>
                      <!-- ブラウザがwebpに対応している場合 -->
                      <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_01.webp" type="image/webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_01.jpg" alt="キャンペーンの画像01">
                    </picture>
                  </div>

                  <div class="campaign-card__body">
                    <div class="campaign-card__category category">ライセンス講習</div>
                    <h3 class="campaign-card__title">ライセンス取得</h3>
                  </div>
                  <div class="campaign-card__content">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <span class="campaign-card__price-regular">&yen;56,000</span>
                      <span class="campaign-card__price-discounted">&yen;46,000</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="top-campaign__card swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__img">
                    <picture>
                      <!-- ブラウザがwebpに対応している場合 -->
                      <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_02.webp" type="image/webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_02.jpg" alt="キャンペーンの画像02">
                    </picture>
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__category category">体験ダイビング</div>
                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                  </div>
                  <div class="campaign-card__content">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <span class="campaign-card__price-regular">&yen;24,000</span>
                      <span class="campaign-card__price-discounted">&yen;18,000</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="top-campaign__card swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__img">
                    <picture>
                      <!-- ブラウザがwebpに対応している場合 -->
                      <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_03.webp" type="image/webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_03.jpg" alt="キャンペーンの画像03">
                    </picture>
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__category category">体験ダイビング</div>
                    <h3 class="campaign-card__title">ナイトダイビング</h3>
                  </div>
                  <div class="campaign-card__content">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <span class="campaign-card__price-regular">&yen;10,000</span>
                      <span class="campaign-card__price-discounted">&yen;8,000</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="top-campaign__card swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__img">
                    <picture>
                      <!-- ブラウザがwebpに対応している場合 -->
                      <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_04.webp" type="image/webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_04.jpg" alt="キャンペーンの画像04">
                    </picture>
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__category category">ファンダイビング</div>
                    <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                  </div>
                  <div class="campaign-card__content">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <span class="campaign-card__price-regular">&yen;20,000</span>
                      <span class="campaign-card__price-discounted">&yen;16,000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="top-campaign__swiper-button">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>

        <div class="top-campaign__btn">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>campaign" class="btn">view more<span></span></a>
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
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>about" class="btn">view more<span></span></a>
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
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>information" class="btn">view more<span></span></a>
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
          <li class="blog-cards__item blog-card js-hover-scale">
            <a href="#">
              <div class="blog-card__body">
                <div class="blog-card__header">
                  <time class="blog-card__time" datetime="2023-11-17">2023.11.17</time>
                  <h3 class="blog-card__title">ライセンス取得</h3>
                </div>
                <div class="blog-card__content">
                  <p class="blog-card__text text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                  </p>
                </div>
              </div>
              <picture class="blog-card__img">
                <!-- ブラウザがwebpに対応している場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog_01.webp" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_01.jpg" alt="ライセンス取得">
              </picture>
            </a>
          </li>

          <li class="blog-cards__item blog-card js-hover-scale">
            <a href="#">
              <div class="blog-card__body">
                <div class="blog-card__header">
                  <time class="blog-card__time" datetime="2023-11-17">2023.11.17</time>
                  <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
                </div>
                <div class="blog-card__content">
                  <p class="blog-card__text text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                  </p>
                </div>
              </div>
              <picture class="blog-card__img">
                <!-- ブラウザがwebpに対応している場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog_02.webp" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_02.jpg" alt="ウミガメと泳ぐ">
              </picture>
            </a>
          </li>

          <li class="blog-cards__item blog-card js-hover-scale">
            <a href="#">
              <div class="blog-card__body">
                <div class="blog-card__header">
                  <time class="blog-card__time" datetime="2023-11-17">2023.11.17</time>
                  <h3 class="blog-card__title">カクレクマノミ</h3>
                </div>
                <div class="blog-card__content">
                  <p class="blog-card__text text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<br>
                  </p>
                </div>
              </div>
              <picture class="blog-card__img">
                <!-- ブラウザがwebpに対応している場合 -->
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog_03.webp" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_03.jpg" alt="カクレクマノミ">
              </picture>
            </a>
          </li>
        </ul>

        <div class="top-blog__btn">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog" class="btn">view more<span></span></a>
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
          <li class="voice-cards__item voice-card">
            <div class="voice-card__body">
              <div class="voice-card__header">
                <div class="voice-card__meta">
                  <span class="voice-card__gender">20代(女性)</span>
                  <span class="voice-card__category">ライセンス講習</span>
                </div>
                <h3 class=" voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
              </div>
              <div class="voice-card__img color-box js-color-box">
                <picture>
                  <!-- ブラウザがwebpに対応している場合 -->
                  <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/voice-card_01.webp" type="image/webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/voice-card_01.jpg" alt="お客様01">
                </picture>
              </div>
            </div>
            <div class="voice-card__content">
              <p class="voice-card__text text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>

          <li class="voice-cards__item voice-card">
            <div class="voice-card__body">
              <div class="voice-card__header">
                <div class="voice-card__meta">
                  <span class="voice-card__gender">20代(男性)</span>
                  <span class="voice-card__category">ファンダイビング</span>
                </div>
                <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
              </div>
              <div class="voice-card__img color-box js-color-box">
                <picture>
                  <!-- ブラウザがwebpに対応している場合 -->
                  <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/voice-card_02.webp" type="image/webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/voice-card_02.jpg" alt="お客様02">
                </picture>
              </div>
            </div>
            <div class="voice-card__content">
              <p class="voice-card__text text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </li>
        </ul>

        <div class="top-voice__btn">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>voice" class="btn">view more<span></span></a>
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
                <div class="top-price__list-item">
                  <dt>オープンウォーターダイバーコース</dt>
                  <dd>&yen;50,000</dd>
                </div>
                <div class="top-price__list-item">
                  <dt>アドバンスドオープンウォーターコース</dt>
                  <dd>&yen;60,000</dd>
                </div>
                <div class="top-price__list-item">
                  <dt>レスキュー＋EFRコース</dt>
                  <dd>&yen;70,000</dd>
                </div>
              </dl>
            </div>

            <div class="top-price__list-items">
              <p class="top-price__list-title">体験ダイビング</p>
              <dl>
                <div class="top-price__list-item">
                  <dt>ビーチ体験ダイビング(半日)</dt>
                  <dd>&yen;7,000</dd>
                </div>
                <div class="top-price__list-item">
                  <dt>ビーチ体験ダイビング(1日)</dt>
                  <dd>&yen;14,000</dd>
                </div>
                <div class="top-price__list-item">
                  <dt>ボート体験ダイビング(半日)</dt>
                  <dd>&yen;10,000</dd>
                </div>
                <div class="top-price__list-item">
                  <dt>ボート体験ダイビング(1日)</dt>
                  <dd>&yen;18,000</dd>
                </div>
              </dl>
            </div>

            <div class="top-price__list-items">
              <p class="top-price__list-title">ファンダイビング</p>
              <dl>
                <div class="top-price__list-item">
                  <dt>ビーチダイビング(2ダイブ)</dt>
                  <dd>&yen;14,000</dd>
                </div>
                <div class="top-price__list-item">
                  <dt>ボートダイビング(2ダイブ)</dt>
                  <dd>&yen;18,000</dd>
                </div>
                <div class="top-price__list-item">
                  <dt>スペシャルダイビング(2ダイブ)</dt>
                  <dd>&yen;24,000</dd>
                </div>
                <div class="top-price__list-item">
                  <dt>ナイトダイビング(1ダイブ)</dt>
                  <dd>&yen;10,000</dd>
                </div>
              </dl>
            </div>

            <div class="top-price__list-items">
              <p class="top-price__list-title">スペシャルダイビング</p>
              <dl>
                <div class="top-price__list-item">
                  <dt>貸切ダイビング(2ダイブ)</dt>
                  <dd>&yen;24,000</dd>
                </div>
                <div class="top-price__list-item">
                  <dt>1日ダイビング(3ダイブ)</dt>
                  <dd>&yen;32,000</dd>
                </div>
              </dl>
            </div>
          </div>
        </div>

        <div class="top-price__btn">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>price" class="btn">view more<span></span></a>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
