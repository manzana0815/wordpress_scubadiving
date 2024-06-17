<aside class="two-column__aside aside" id="sidebar">
  <section class="aside__post">
    <h3 class="aside__title">
      <span>人気記事</span>
    </h3>
    <div class="aside__content aside-post">
      <ul class="aside-post__cards">
        <li class="aside-post__card js-hover-scale">
          <a href="./single.html">
            <div class="aside-post__img">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog_04.webp" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_04.jpg" alt="ライセンス取得">
              </picture>
            </div>
            <div class="aside-post__content">
              <time class="aside-post__date" datetime="2023-11-17">2023.11.17</time>
              <h3 class="aside-post__card-title">ライセンス取得</h3>
            </div>
          </a>
        </li>

        <li class="aside-post__card js-hover-scale">
          <a href="./single.html">
            <div class="aside-post__img">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog_02.webp" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_02.jpg" alt="ウミガメと泳ぐ">
              </picture>
            </div>
            <div class="aside-post__content">
              <time class="aside-post__date" datetime="2023-11-17">2023.11.17</time>
              <h3 class="aside-post__card-title">ウミガメと泳ぐ</h3>
            </div>
          </a>
        </li>

        <li class="aside-post__card js-hover-scale">
          <a href="./single.html">
            <div class="aside-post__img">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog_03.webp" type="image/webp">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_03.jpg" alt="熱帯魚の写真">
              </picture>
            </div>
            <div class="aside-post__content">
              <time class="aside-post__date" datetime="2023-11-17">2023.11.17</time>
              <h3 class="aside-post__card-title">ウミガメと泳ぐ</h3>
            </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="aside__voice">
    <h3 class="aside__title">
      <span>口コミ</span>
    </h3>
    <div class="aside__content aside-voice">
      <?php
      $voice_query = new WP_Query(array(
        'post_type' => 'voice',
        'posts_per_page' => '1',
      ));
      if ($voice_query->have_posts()) : while ($voice_query->have_posts()) : $voice_query->the_post();
          $customer_voice = get_field('customer_voice');
          if ($customer_voice) :
            $customer_info = $customer_voice['customer_info'];
            $customer_image = $customer_voice['customer_image'];
            $voice_title = $customer_voice['voice_title'];
            $voice_text = $customer_voice['voice_text'];
      ?>
            <div class="aside-voice__card">
              <div class="aside-voice__img">
                <picture>
                  <img src="<?php echo esc_url($customer_image); ?>" alt="<?php echo esc_attr($voice_title); ?>のアイキャッチ画像">
                </picture>
              </div>
              <div class="aside-voice__body">

                <div class="aside-voice__meta">
                  <span class="aside-voice__gender">
                    <?php echo esc_html($customer_info["age"]); ?> (<?php echo esc_html($customer_info["group"]); ?>)
                  </span>
                </div>
                <h3 class="aside-voice__title"><?php echo esc_html($voice_title); ?></h3>
              </div>
              <div class="aside-voice__btn">
                <a href="<?php echo esc_url(home_url('/')); ?>voice" class="btn">view more<span></span></a>
              </div>
            </div>
      <?php
          endif; // End if $customer_voice
        endwhile;
      endif; // End while and if have_posts()
      wp_reset_postdata();
      ?>
    </div>
  </section>

  <section class="aside__campaign">
    <h3 class="aside__title">
      <span>キャンペーン</span>
    </h3>
    <div class="aside__content aside-campaign">
      <ul class="aside-campaign__cards">
        <?php
        $campaign_query = new WP_Query(array(
          'post_type' => 'campaign',
          'posts_per_page' => '2',
        ));

        if ($campaign_query->have_posts()) :
          while ($campaign_query->have_posts()) : $campaign_query->the_post();
            $campaign_card = get_field('campaign_card');

            if ($campaign_card) :
              $campaign_image = $campaign_card['campaign_image'];
              $campaign_title = $campaign_card['campaign_title'];
              $campaign_detail = $campaign_card['campaign_detail'];
              $regular_price = $campaign_card['campaign_price']['regular_price'];
              $discounted_price = $campaign_card['campaign_price']['discounted_price'];
        ?>

              <div class="aside-campaign__card campaign-card">
                <div class="campaign-card__img">
                  <picture>
                    <img src="<?php echo esc_url($campaign_image); ?>" alt="<?php echo esc_attr($campaign_title); ?>の画像">
                  </picture>
                </div>

                <div class="campaign-card__body">
                  <div class="campaign-card__header">
                    <h3 class="campaign-card__title"><?php echo esc_html($campaign_title); ?></h3>
                  </div>
                  <div class="campaign-card__content">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <?php if (isset($regular_price) && isset($discounted_price)) : ?>
                        <span class="campaign-card__price-regular">&yen;<?php echo number_format($regular_price); ?></span>
                        <span class="campaign-card__price-discounted">&yen;<?php echo number_format($discounted_price); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>

        <?php
            endif;
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </ul>
    </div>

    <div class="aside-campaign__btn">
      <a href="#" class="btn">view more<span></span></a>
    </div>
  </section>

  <section class="aside__archive">
    <h3 class="aside__title">
      <span>アーカイブ</span>
    </h3>
    <div class="aside__content aside-archive">
      <ul class="aside-archive__items">
        <li class="aside-archive__item">
          <button class="aside-archive__year active js-collapse">2023</button>
          <ul class="aside-archive__months show">
            <li class="aside-archive__month"><a href="#">3月</a></li>
            <li class="aside-archive__month"><a href="#">2月</a></li>
            <li class="aside-archive__month"><a href="#">1月</a></li>
          </ul>
        </li>
        <li class="aside-archive__item">
          <button class="aside-archive__year js-collapse">2022</button>
          <ul class="aside-archive__months">
            <li class="aside-archive__month"><a href="#">12月</a></li>
            <li class="aside-archive__month"><a href="#">11月</a></li>
            <li class="aside-archive__month"><a href="#">10月</a></li>
            <li class="aside-archive__month"><a href="#">9月</a></li>
            <li class="aside-archive__month"><a href="#">8月</a></li>
            <li class="aside-archive__month"><a href="#">7月</a></li>
            <li class="aside-archive__month"><a href="#">6月</a></li>
            <li class="aside-archive__month"><a href="#">5月</a></li>
            <li class="aside-archive__month"><a href="#">4月</a></li>
            <li class="aside-archive__month"><a href="#">3月</a></li>
            <li class="aside-archive__month"><a href="#">2月</a></li>
            <li class="aside-archive__month"><a href="#">1月</a></li>
            <!-- 以下、4月から12月まで続く -->
          </ul>
        </li>
      </ul>
    </div>
  </section>
</aside>
