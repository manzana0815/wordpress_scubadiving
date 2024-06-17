<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0, viewport-fit=cover" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php
  $top = esc_url(home_url('/'));
  $campaign = esc_url(home_url('/campaign/'));
  $about = esc_url(home_url('/about/'));
  $information = esc_url(home_url('/information/'));
  $blog = esc_url(home_url('/blog/'));
  $voice = esc_url(home_url('/voice/'));
  $price = esc_url(home_url('/price/'));
  $faq = esc_url(home_url('/faq/'));
  $sitemap = esc_url(home_url('/sitemap/'));
  $policy = esc_url(home_url('/policy/'));
  $terms = esc_url(home_url('/terms/'));
  $contact = esc_url(home_url('/contact/'));
  ?>
  <!-- HEADERー -->
  <header class="header header-layout">
    <div class="header__inner">
      <?php if (is_front_page()) : ?>
        <h1 class="header__site-title site-title">
        <?php else : ?>
          <div class="header__site-title site-title">
          <?php endif; ?>
          <a href="<?php echo $top ?>" class="site-title__logo">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/logo.svg" alt="CodeUps">
          </a>
          <?php if (is_front_page()) : ?>
        </h1>
      <?php else : ?>
    </div>
  <?php endif; ?>

  <!-- PC用ナビメニュー -->
  <nav class="header__pc-nav pc-nav">
    <ul class="pc-nav__items">
      <li class="pc-nav__item">
        <a href="<?php echo $campaign ?>">
          <div class="pc-nav__link">
            <span class="pc-nav__link-en">campaign</span>
            <span class="pc-nav__link-jp">キャンペーン</span>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $about ?>">
          <div class="pc-nav__link">
            <span class="pc-nav__link-en">about us</span>
            <span class="pc-nav__link-jp">私たちについて</span>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $information ?>">
          <div class="pc-nav__link">
            <span class="pc-nav__link-en">information</span>
            <span class="pc-nav__link-jp">ダイビング情報</span>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $blog ?>">
          <div class="pc-nav__link">
            <span class="pc-nav__link-en">blog</span>
            <span class="pc-nav__link-jp">ブログ</span>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $voice ?>">
          <div class="pc-nav__link">
            <span class="pc-nav__link-en">voice</span>
            <span class="pc-nav__link-jp">お客様の声</span>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $price ?>">
          <div class="pc-nav__link">
            <span class="pc-nav__link-en">price</span>
            <span class="pc-nav__link-jp">料金一覧</span>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $faq ?>">
          <div class="pc-nav__link">
            <span class="pc-nav__link-en">FAQ</span>
            <span class="pc-nav__link-jp">よくある質問</span>
          </div>
        </a>
      </li>
      <li class="pc-nav__item">
        <a href="<?php echo $contact ?>">
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
              <a href="<?php echo $campaign ?>">キャンペーン</a>
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
              <a href="<?php echo $about ?>">私たちについて</a>
            </li>
          </ul>
          <ul class="nav__items">
            <li class="nav__item">
              <a href="<?php echo $information ?>">ダイビング情報</a>
              <ul class="nav__sub-items">
                <li class="nav__sub-item">
                  <a href="<?php echo esc_url(home_url('/information#tab01')); ?>">ライセンス講習</a>
                </li>
                <li class="nav__sub-item">
                  <a href="<?php echo esc_url(home_url('/information#tab02')); ?>">ファンダイビング</a>
                </li>
                <li class="nav__sub-item">
                  <a href="<?php echo esc_url(home_url('/information#tab03')); ?>">体験ダイビング</a>
                </li>
              </ul>
            </li>
            <li class="nav__item">
              <a href="<?php echo $blog ?>">ブログ</a>
            </li>
          </ul>
        </div>

        <div class="nav__right">
          <ul class="nav__items">
            <li class="nav__item">
              <a href="<?php echo $voice ?>">お客様の声</a>
            </li>
            <li class="nav__item">
              <a href="<?php echo $price ?>">料金一覧</a>
              <ul class="nav__sub-items">
                <li class="nav__sub-item">
                  <a href="<?php echo esc_url(home_url('/price#price01')); ?>">ライセンス講習</a>
                </li>
                <li class="nav__sub-item">
                  <a href="<?php echo esc_url(home_url('/price#price02')); ?>">体験ダイビング</a>
                </li>
                <li class="nav__sub-item">
                  <a href="<?php echo esc_url(home_url('/price#price03')); ?>">ファンダイビング</a>
                </li>
                <li class="nav__sub-item">
                  <a href="<?php echo esc_url(home_url('/price#price04')); ?>">スペシャルダイビング</a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav__items">
            <li class="nav__item">
              <a href="<?php echo $faq ?>">よくある質問</a>
            </li>
            <li class="nav__item">
              <a href="<?php echo $sitemap ?>">サイトマップ</a>
            </li>
            <li class="nav__item">
              <a href="<?php echo $policy ?>">プライバシー<br class="u-mobile">ポリシー</a>
            </li>
            <li class="nav__item">
              <a href="<?php echo $terms ?>">利用規約</a>
            </li>
            <li class="nav__item">
              <a href="<?php echo $contact ?>">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  </header>
