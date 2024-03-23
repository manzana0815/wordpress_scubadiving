<!-- CONTACT -->
<section class="contact-area contact-area-layout">
  <div class=" contact-area__inner inner">
    <div class="contact-area__wrapper">
      <div class="contact-area__flex">
        <div class="contact-area__header">
          <div class="contact-area__site-title site-title">
            <a href="index.html" class="site-title__logo site-title__logo--lg">
              <img src="<?php echo get_theme_file_uri(); ?>/images/common/logo_gr.svg" alt="CodeUps">
            </a>
          </div>
          <div class="contact-area__access">
            <address class="contact-area__info">
              <span><?php the_field("address", 28); ?></span>
              <span><a href="tel:01200000000">TEL:<?php the_field("phone_numbers", 28); ?></a></span>
              <span>営業時間:<?php the_field("open_time", 28); ?>-<?php the_field("close_time", 28); ?></span>
              <span>定休日:<?php the_field("close_day", 28); ?></span>
            </address>
            <figure class="contact-area__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.9921894034765!2d127.6882780105528!3d26.229443326965335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bd0b4a42ff1%3A0x36812e0e598f7d6b!2z44CSOTAwLTAwMDUg5rKW57iE55yM6YKj6KaH5biC5aSp5LmF77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1695809396060!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </figure>
          </div>
        </div>

        <div class="contact-area__body">
          <div class="contact-area__title section-title">
            <span class="section-title__en section-title__en--lg">contact</span>
            <h2 class="section-title__jp">お問い合わせ</h2>
          </div>
          <p class="contact-area__text">ご予約・お問い合わせはコチラ</p>
          <div class="contact-area__btn">
            <a href="<?php echo esc_url(home_url('/')); ?>contact" class="btn">contact us<span></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
