
<!-- To Top -->
    <div class="to-top js-to-top">
      <a href="./index.html"></a>
    </div>

  </main>

  <!-- FOOTER -->
  <footer class="footer footer-layout">
    <div class="footer__inner inner">
      <div class="footer__site-title site-title">
        <a <?php echo esc_url( home_url( '/' ) ); ?> class="site-title__logo site-title__logo--md">
          <img src="<?php echo get_theme_file_uri(); ?>/images/common/logo.svg" alt="CodeUps">
        </a>
        <div class="footer__sns-links">
          <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/logo_fb.svg" alt="Facebookのアイコン">
          </a>
          <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/logo_ig.svg" alt="instagramのアイコン">
          </a>
        </div>
      </div>

      <div class="footer__nav nav">
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
      <div class="footer__copyright">
        <small>Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>
