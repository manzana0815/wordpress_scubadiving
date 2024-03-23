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

  <!-- blog -->
  <div class="two-column section-layout">
    <div class="two-column__inner inner">
      <div class="two-column__wrapper">
        <div class="two-column__main-content">
          <ul class="two-column__card-items blog-cards blog-cards--two-column">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li class="blog-cards__item blog-card js-hover-scale">
                  <a href="<?php the_permalink(); ?>">
                    <div class="blog-card__body">
                      <div class="blog-card__header">
                        <time class="blog-card__time" datetime="<?php the_time("c"); ?>"><?php the_time("Y.m.d"); ?></time>
                        <h3 class="blog-card__title"><?php the_title(); ?></h3>
                      </div>
                      <div class="blog-card__content">
                        <p class="blog-card__text text">
                          <?php the_excerpt(); ?>
                        </p>
                      </div>
                    </div>
                    <div class="blog-card__img">
                      <picture>
                        <?php if (get_the_post_thumbnail()) : ?>
                          <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                        <?php else : ?>
                          <img src="<?php echo get_theme_file_uri(); ?>/images/common/no_image.jpg" alt="noimage">
                        <?php endif; ?>
                      </picture>
                    </div>
                  </a>
                </li>
            <?php endwhile;
            endif; ?>
          </ul>

          <div class="two-column__pagenavi pagenavi wp-pagenavi">
            <a class="previouspostslink" rel="prev" href="#"></a>
            <?php wp_pagenavi(); ?>
            <a class="nextpostslink" rel="next" href="#"></a>
          </div>
        </div>

        <div class="two-column__aside-content">
          <aside class="two-column__aside aside">
            <section class="aside__post">
              <h2 class="aside__title">
                <span>人気記事</span>
              </h2>
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
                          <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog_03.jpg" alt="カクレクマノミ">
                        </picture>
                      </div>
                      <div class="aside-post__content">
                        <time class="aside-post__date" datetime="2023-11-17">2023.11.17</time>
                        <h3 class="aside-post__card-title">カクレクマノミ</h3>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </section>

            <section class="aside__voice">
              <h2 class="aside__title">
                <span>口コミ</span>
              </h2>
              <div class="aside__content aside-voice">
                <?php
                $wp_query = new WP_Query();
                $my_posts = array(
                  "post_type" => "voice",
                  "posts_per_page" => "1",
                );
                $wp_query->query($my_posts);
                if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>
                    <div class="aside-voice__img">
                      <picture>
                        <source srcset="<?php the_post_thumbnail_url("full"); ?>" type="image/webp">
                        <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>の画像">
                      </picture>
                    </div>
                    <div class="aside-voice__body">
                      <span class="aside-voice__gender">
                        <?php
                        the_field("age");
                        ?>
                        (
                        <?php
                        the_field("gender");
                        ?>
                        )
                      </span>
                      <h3 class="aside-voice__title"><?php the_title(); ?></h3>
                    </div>
                    <div class="aside-voice__btn">
                      <a href="#" class="btn">view more<span></span></a>
                    </div>
                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
              </div>
            </section>

            <section class="aside__campaign">
              <h2 class="aside__title">
                <span>キャンペーン</span>
              </h2>
              <div class="aside__content aside-campaign">
                <ul class="aside-campaign__cards">
                  <?php
                  $wp_query = new WP_Query();
                  $my_posts = array(
                    "post_type" => "campaign",
                    "posts_per_page" => "2",
                  );
                  $wp_query->query($my_posts);
                  if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                  ?>
                      <li class="aside-campaign__card campaign-card campaign-card--aside ">
                        <div class="campaign-card__img">
                          <picture>
                            <!-- ブラウザがwebpに対応している場合 -->
                            <source srcset="<?php the_post_thumbnail_url("full"); ?>" type="images/webp">
                            <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>の画像">
                          </picture>
                        </div>
                        <div class="campaign-card__body">
                          <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                        </div>
                        <div class="campaign-card__content">
                          <p class="campaign-card__text">全部コミコミ(お一人様)</p>
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
                      </li>

                  <?php endwhile;
                  endif;
                  wp_reset_postdata(); ?>
                </ul>
              </div>

              <div class="aside-campaign__btn">
                <a href="#" class="btn">view more<span></span></a>
              </div>
            </section>

            <section class="aside__archive">
              <h2 class="aside__title">
                <span>アーカイブ</span>
              </h2>
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
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
