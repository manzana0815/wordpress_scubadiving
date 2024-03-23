<?php get_header(); ?>

  <main>
    <!-- SUB-MV -->
    <div class="sub-mv">
      <div class="sub-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/sitemap-mv-sp.webp" media="(max-width:767px)" type="image/webp">
          <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/sitemap-mv-pc.webp" media="(min-width:768px)" type="image/webp">
          <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/sitemap-mv-pc.jpg" media="(min-width:768px)" type="image/webp">
          <img src="<?php echo get_theme_file_uri(); ?>/images/common/sitemap-mv-sp.jpg" alt="ダイバーの集合写真">
        </picture>
      </div>

      <div class="sub-mv__title sub-title">
        <h1 class="sub-title__title">site <span class="sub-title__title sub-title__title--capital">map</span></h1>
      </div>
    </div>

<!-- BREADCRUMBS -->
<?php get_template_part("parts/breadcrumb"); ?>


    <!-- SITEMAP  -->
    <div class="sitemap section-layout">
      <div class="sitemap__inner inner">
        <div class="sitemap__nav nav">
          <div class="nav__left">
            <ul class="nav__items">
              <li class="nav__item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>campaign">キャンペーン</a>
                <ul class="nav__sub-items">
                <li class="nav__sub-item">
                  <a href="#">ライセンス取得</a>
                </li>
                <li class="nav__sub-item">
                  <a href="#">貸切体験ダイビング</a>
                </li>
                <li class="nav__sub-item">
                  <a href="#">ナイトダイビング</a>
                </li>
                <li class="nav__sub-item">
                  <a href="#">貸切ファンダイビング</a>
                </li>
              </ul>
              </li>
              <li class="nav__item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>about">私たちについて</a>
              </li>
            </ul>

            <ul class="nav__items">
              <li class="nav__item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>information">ダイビング情報</a>
                <ul class="nav__sub-items">
                  <li class="nav__sub-item">
                    <a href="./page-information.html#tab01">ライセンス講習</a>
                  </li>
                  <li class="nav__sub-item">
                    <a href="./page-information.html#tab02">体験ダイビング</a>
                  </li>
                  <li class="nav__sub-item">
                    <a href="./page-information.html#tab03">ファンダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="nav__item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">ブログ</a>
              </li>
            </ul>
          </div>

          <div class="nav__right">
            <ul class="nav__items">
              <li class="nav__item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>voice">お客様の声</a>
              </li>
              <li class="nav__item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>price">料金一覧</a>
                <ul class="nav__sub-items">
                  <li class="nav__sub-item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price01">ライセンス講習</a>
                  </li>
                  <li class="nav__sub-item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price02">体験ダイビング</a>
                  </li>
                  <li class="nav__sub-item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price03">ファンダイビング</a>
                  </li>
                  <li class="nav__sub-item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price04">スペシャルダイビング</a>
                  </li>
                </ul>
              </li>
            </ul>

             <ul class="nav__items">
            <li class="nav__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>faq">よくある質問</a>
            </li>
            <li class="nav__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap">サイトマップ</a>
            </li>
            <li class="nav__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>policy">プライバシー<br class="u-mobile">ポリシー</a>
            </li>
            <li class="nav__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>terms">利用規約</a>
            </li>
            <li class="nav__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">お問い合わせ</a>
            </li>
          </ul>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
