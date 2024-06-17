<?php get_header(); ?>
<main>
  <!-- CAMPAIGN-MV -->
  <div class="sub-mv">
    <div class="sub-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-mv-sp.webp" media="(max-width: 767px)" type="image/webp" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-mv-pc.webp" media="(min-width: 768px)" type="image/webp" />
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-mv-pc.jpg" media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-mv-sp.jpg" alt="黄色2匹の熱帯魚の写真" />
      </picture>
    </div>

    <div class="sub-mv__title sub-title">
      <h1 class="sub-title__title">campaign</h1>
    </div>
  </div>

  <!-- BREADCRUMBS -->
  <?php get_template_part("parts/breadcrumb"); ?>

  <!-- CAMPAIGn -->
  <div class="campaign section-layout">
    <div class="campaign__inner inner">
      <ul class="campaign__categories categories">
        <li class="categories__item category category--lg current"><a href="#">all</a></li>
        <?php
        // カテゴリー情報を取得
        $categories = get_categories(array(
          'orderby' => 'name',
          'order'   => 'ASC'
        ));

        // 各カテゴリーに対してループ
        foreach ($categories as $category) {
          // カテゴリーへのリンクを取得
          $category_link = get_category_link($category->term_id);

          // リストアイテムとしてカテゴリーを出力
          echo '<li class="categories__item category category--lg"><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></li>';
        }
        ?>
      </ul>

      <ul class="campaign__cards campaign__cards--two-column">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php
            $campaign_card = get_field('campaign_card');
            if ($campaign_card) :
            ?>
              <li class="campaign__card campaign-card campaign-card--two-column">
                <div class="campaign-card__img">
                  <picture>
                    <!-- 画像のURLとalt属性を表示 -->
                    <img src="<?php echo esc_url($campaign_card['campaign_image']) ?>" alt="<?php echo esc_url($campaign_card['campaign_title']) ?>の画像" />
                  </picture>
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__header">
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
                    <h3 class="campaign-card__title"><?php echo $campaign_card['campaign_title']; ?></h3>
                  </div>
                  <div class="campaign-card__content">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <?php
                      $campaign_price = $campaign_card['campaign_price'];
                      if ($campaign_price) {
                        $regular = $campaign_price['regular_price'];
                        $discounted = $campaign_price['discounted_price'];
                      ?>
                        <div class="campaign-card__price">
                          <span class="campaign-card__price-regular">&yen;<?php echo number_format($regular); ?></span>
                          <span class="campaign-card__price-discounted">&yen;<?php echo number_format($discounted); ?></span>
                        </div>
                      <?php } else { ?>
                        <!-- 'campaign_price' が null の場合の処理 -->
                        <div class="campaign-card__price">価格未定</div>
                      <?php } ?>
                    </div>
                    <div class="campaign-card__detail">
                      <p class="campaign-card__text text">
                        <?php echo $campaign_card['campaign_detail']; ?>
                      </p>
                      <div class="campaign-card__info">
                        <?php
                        $campaign_period = $campaign_card['campaign_period'];
                        if ($campaign_period) {
                          $start = $campaign_period['campaign_start'];
                          $end = $campaign_period['campaign_end'];
                        ?>
                          <p class="campaign-card__date"><?php echo $start; ?> - <?php echo $end; ?></p>
                        <?php } ?>
                        <p class="campaign-card__link">ご予約・お問い合わせはコチラ</p>
                      </div>
                    </div>
                    <div class="campaign-card__btn">
                      <a href="<?php echo esc_url(home_url('/')); ?>contact" class="btn">contact us<span></span></a>
                    </div>
                  </div>
                </div>
              </li>
            <?php endif; ?>
        <?php endwhile;
        endif; ?>
      </ul>

      <div class="campaign__pagenavi wp-pagenavi">
        <a class="previouspostslink" rel="prev" href="#"></a>
        <?php wp_pagenavi(); ?>
        <a class="nextpostslink" rel="next" href="#"></a>
      </div>
    </div>
  </div>
  <?php get_template_part("parts/contact-section"); ?>
  <?php get_footer(); ?>
