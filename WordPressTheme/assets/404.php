<?php get_header(); ?>
<main>
  <div class="wrap wrap--gr">

    <!-- BREADCRUMBS -->
    <?php get_template_part("parts/breadcrumb"); ?>
    <!-- ERROR -->
    <div class="error error-layout">
      <div class="error__inner inner">
        <h1 class="error__title">404</h1>
        <p class="error__text">
          申し訳ありません。<br>
          お探しのページが見つかりません。
        </p>
        <div class="error__btn">
          <a href="./index.html" class="btn btn--wh">page TOP<span></span></a>
        </div>
      </div>
    </div>

  </div>
</main>
<?php get_footer(); ?>
