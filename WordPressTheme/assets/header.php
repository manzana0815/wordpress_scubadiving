<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0, viewport-fit=cover" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<body id="top" <?php body_class();?>>
  <!-- HEADERー -->
  <header class="header header-layout">
    <div class="header__inner">
      <h1 class="header__site-title site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title__logo">
          <img src="<?php echo get_theme_file_uri(); ?>/images/common/logo.svg" alt="CodeUps">
        </a>
      </h1>

      <!-- PC用ナビメニュー -->
      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>campaign">
              <div class="pc-nav__link">
                <span class="pc-nav__link-en">campaign</span>
                <span class="pc-nav__link-jp">キャンペーン</span>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>about">
              <div class="pc-nav__link">
                <span class="pc-nav__link-en">about us</span>
                <span class="pc-nav__link-jp">私たちについて</span>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>information">
              <div class="pc-nav__link">
                <span class="pc-nav__link-en">information</span>
                <span class="pc-nav__link-jp">ダイビング情報</span>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">
              <div class="pc-nav__link">
                <span class="pc-nav__link-en">blog</span>
                <span class="pc-nav__link-jp">ブログ</span>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>voice">
              <div class="pc-nav__link">
                <span class="pc-nav__link-en">voice</span>
                <span class="pc-nav__link-jp">お客様の声</span>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>price">
              <div class="pc-nav__link">
                <span class="pc-nav__link-en">price</span>
                <span class="pc-nav__link-jp">料金一覧</span>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>faq">
              <div class="pc-nav__link">
                <span class="pc-nav__link-en">FAQ</span>
                <span class="pc-nav__link-jp">よくある質問</span>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">
              <div class="pc-nav__link">
                <span class="pc-nav__link-en">contact</span>
                <span class="pc-nav__link-jp">お問い合わせ</span>
              </div>
            </a>
          </li>
        </ul>
      </nav>

      <!-- SP用ハンバーガーメニュー -->
      <button class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

    <!-- SP用ドロワーメニュー -->
    <div class="header__drawer drawer">
      <div class="drawer__inner inner">
        <nav class="drawer__nav nav">
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
        </nav>
      </div>
    </div>
  </header>
