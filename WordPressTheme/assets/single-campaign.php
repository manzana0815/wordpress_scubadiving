<?php get_header(); ?>

<main>
  <!-- SUB-MV -->
  <div class="sub-mv">
    <div class="sub-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog-mv-sp.webp" media="(max-width:767px)" type="image/webp">
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog-mv-pc.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog-mv-pc.jpg" media="(min-width:768px)" type="image/webp">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog-mv-sp.jpg" alt="黄色2匹の熱帯魚の写真">
      </picture>
    </div>

    <div class="sub-mv__title sub-title">
      <h1 class="sub-title__title">blog</h1>
    </div>
  </div>

  <!-- BREADCRUMBS -->
  <?php get_template_part("parts/breadcrumb"); ?>


  <!-- two-column -->
  <div class="two-column section-layout">
    <div class="two-column__inner inner">
      <div class="two-column__wrapper">
        <div class="two-column__sub-content">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="two-column__header">
                <time class="two-column__date" datetime="<?php the_time("c"); ?>"><?php the_time("Y.m.d"); ?></time>
                <h2 class="two-column__blog-title"><?php the_title(); ?></h2>
                <div class="two-column__mv">
                  <picture>
                    <source srcset="<?php the_post_thumbnail_url("full"); ?>" type="image/webp">
                    <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>の写真">
                  </picture>
                </div>
              </div>
              <p>
                <?php the_content(); ?>
              </p>
              <picture>
                <source srcset="<?php the_post_thumbnail_url("full"); ?>" type="image/webp">
                <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>の写真">
              </picture>
              <p>
                <?php the_content(); ?>
              </p>
              <ul>
                <li>リスト1</li>
                <li>リスト2</li>
                <li>リスト3</li>
              </ul>
              <p>
                <?php the_content(); ?>
              </p>
          <?php endwhile;
          endif; ?>

          <div class="wp-pagenavi">
            <?php
            $prev = get_previous_post();
            if (!empty($prev)) {
              $prev_url = esc_url(get_permalink($prev->ID));
            }

            $next = get_next_post();
            if (!empty($next)) {
              $next_url = esc_url(get_permalink($next->ID));
            }
            ?>
            <div class="c-page-link__prev">
              <?php if (!empty($prev)) : ?>
                <a class="previouspostslink" rel="prev" href="<?php echo $prev_url ?>"></a>
              <?php endif; ?>
            </div>

            <div class="c-page-link__next">
              <?php if (!empty($next)) : ?>
                <a class="nextpostslink" rel="next" href="<?php echo $next_url ?>"></a>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <aside class="blog__aside aside">
          <section class="aside__article article">
            <h2 class="article__title aside-title">
              <span>人気記事</span>
            </h2>
            <ul class="article__cards">
              <li class="article__card js-hover-scale">
                <a href="./single.html">
                  <div class="article__img">
                    <picture>
                      <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog_04.webp" type="image/webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_04.jpg" alt="黄色の熱帯魚の写真">
                    </picture>
                  </div>
                  <div class="article__content">
                    <time class="article__date" datetime="2023-11-17">2023.11.17</time>
                    <h3 class="article__card-title">ライセンス取得</h3>
                  </div>
                </a>
              </li>

              <li class="article__card js-hover-scale">
                <a href="./single.html">
                  <div class="article__img">
                    <picture>
                      <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog_02.webp" type="image/webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_02.jpg" alt="ウミガメの写真">
                    </picture>
                  </div>
                  <div class="article__content">
                    <time class="article__date" datetime="2023-11-17">2023.11.17</time>
                    <h3 class="article__card-title">ウミガメと泳ぐ</h3>
                  </div>
                </a>
              </li>

              <li class="article__card js-hover-scale">
                <a href="./single.html">
                  <div class="article__img">
                    <picture>
                      <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog_03.webp" type="image/webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_03.jpg" alt="カクレクマノミの写真">
                    </picture>
                  </div>
                  <div class="article__content">
                    <time class="article__date" datetime="2023-11-17">2023.11.17</time>
                    <h3 class="article__card-title">カクレクマノミ</h3>
                  </div>
                </a>
              </li>
            </ul>
          </section>

          <section class="aside__reputation reputation">
            <h2 class="reputation__title aside-title">
              <span>口コミ</span>
            </h2>
            <div class="reputation__content">
              <div class="reputation__img">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/reputation.webp" type="image/webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/reputation.jpg" alt="男女二人組のカップルの写真">
                </picture>
              </div>
              <div class="reputation__body">
                <span class="reputation__meta">30代(カップル)</span>
                <h3 class="reputation__sub-title">ここにタイトルが入ります。ここにタイトル</h3>
              </div>
              <div class="reputation__btn">
                <a href="#" class="btn">view more<span></span></a>
              </div>
            </div>
          </section>

          <section class="aside__campaign">
            <h2 class="aside__campaign-title aside-title">
              <span>キャンペーン</span>
            </h2>
            <ul class="aside__campaign-cards">
              <li class="aside__campaign-card campaign-card campaign-card--aside">
                <div class="campaign-card__img">
                  <picture>
                    <!-- ブラウザがwebpに対応している場合 -->
                    <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_01.webp" type="images/webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_01.jpg" alt="キャンペーンの画像01">
                  </picture>
                </div>
                <div class="campaign-card__body">
                  <h3 class="campaign-card__title">ライセンス取得</h3>
                </div>
                <div class="campaign-card__content">
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <span class="campaign-card__price-regular">&yen;56,000</span>
                    <span class="campaign-card__price-discounted">&yen;46,000</span>
                  </div>
                </div>
              </li>
              <li class="aside__campaign-card campaign-card campaign-card--aside">
                <div class="campaign-card__img">
                  <picture>
                    <!-- ブラウザがwebpに対応している場合 -->
                    <source srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_02.webp" type="images/webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-card_02.jpg" alt="キャンペーンの画像02">
                  </picture>
                </div>
                <div class="campaign-card__body">
                  <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                </div>
                <div class="campaign-card__content">
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <span class="campaign-card__price-regular">&yen;24,000</span>
                    <span class="campaign-card__price-discounted">&yen;18,000</span>
                  </div>
                </div>
              </li>
            </ul>
            <div class="aside__campaign-btn">
              <a href="#" class="btn">view more<span></span></a>
            </div>
          </section>

          <section class="aside__archive archive">
            <h2 class="archive__title aside-title">
              <span>アーカイブ</span>
            </h2>
            <ul class="archive__items">
              <li class="archive__item">
                <button class="archive__year active js-collapse">2023</button>
                <ul class="archive__months show">
                  <li class="archive__month"><a href="#">3月</a></li>
                  <li class="archive__month"><a href="#">2月</a></li>
                  <li class="archive__month"><a href="#">1月</a></li>
                </ul>
              </li>
              <li class="archive__item">
                <button class="archive__year js-collapse">2022</button>
                <ul class="archive__months">
                  <li class="archive__month"><a href="#">12月</a></li>
                  <li class="archive__month"><a href="#">11月</a></li>
                  <li class="archive__month"><a href="#">10月</a></li>
                  <li class="archive__month"><a href="#">9月</a></li>
                  <li class="archive__month"><a href="#">8月</a></li>
                  <li class="archive__month"><a href="#">7月</a></li>
                  <li class="archive__month"><a href="#">6月</a></li>
                  <li class="archive__month"><a href="#">5月</a></li>
                  <li class="archive__month"><a href="#">4月</a></li>
                  <li class="archive__month"><a href="#">3月</a></li>
                  <li class="archive__month"><a href="#">2月</a></li>
                  <li class="archive__month"><a href="#">1月</a></li>
                  <!-- 以下、4月から12月まで続く -->
                </ul>
              </li>
            </ul>
          </section>
        </aside>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
