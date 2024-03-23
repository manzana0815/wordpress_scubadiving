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

      <ul class="campaign__cards">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li class="campaign__card campaign-card campaign-card--two-column">
              <div class="campaign-card__img">
                <picture>
                  <!-- ブラウザがwebpに対応している場合 -->
                  <?php if (get_the_post_thumbnail()) : ?>
                    <source srcset="<?php the_post_thumbnail_url("full"); ?>" type="images/webp" />
                    <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" />
                  <?php endif ?>
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
                <div class="campaign__detail">
                  <p class="campaign__text text">
                    <?php the_excerpt(); ?>
                  </p>
                  <div class="campaign__info">
                    <p class="campaign__date">
                      <?php
                      $start = SCF::get('sales_start');
                      echo $start;
                      ?> -
                      <?php
                      $end = SCF::get('sales_end');
                      echo $end;
                      ?></p>
                    <p class="campaign__link">ご予約・お問い合わせはコチラ</p>
                    <div class="campaign__btn">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class="btn">contact us<span></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>

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
