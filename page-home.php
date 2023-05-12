<?php
get_header();
$aprenderApromover = new WP_Query([
  'posts_per_page' => 1,
  'offset' => 0,
  'orderby' => 'post_date',
  'order' => 'ASC',
  'post_type' => 'aprenderApromover',
  'post_status' => 'publish'
]);
$redesSociales = new WP_Query([
  'posts_per_page' => 4,
  'offset' => 0,
  'orderby' => 'post_date',
  'order' => 'ASC',
  'post_type' => 'redesSociales',
  'post_status' => 'publish'
]);
?>
<?php
$queHacemos = new WP_Query([
  'posts_per_page' => 3,
  'offset' => 0,
  'orderby' => 'post_date',
  'order' => 'ASC',
  'post_type' => 'queHacemos',
  'post_status' => 'publish'
]);
$hacemosTrabajoCon = new WP_Query([
  'posts_per_page' => 5,
  'offset' => 0,
  'orderby' => 'post_date',
  'order' => 'ASC',
  'post_type' => 'hacemosTrabajoCon',
  'post_status' => 'publish'
]);
$hacemosParteDe = new WP_Query([
  'posts_per_page' => 5,
  'offset' => 0,
  'orderby' => 'post_date',
  'order' => 'ASC',
  'post_type' => 'hacemosParteDe',
  'post_status' => 'publish'
]);

$titleHemosTrabajadoCon = new WP_Query([
  'posts_per_page' => 1,
  'offset' => 0,
  'orderby' => 'post_date',
  'order' => 'ASC',
  'post_type' => 'titles_seccion_home',
  'post_status' => 'publish',
  'category_name' => "hemos_trabajado_con",
]);
$titleHacemosParte = new WP_Query([
  'posts_per_page' => 1,
  'offset' => 0,
  'orderby' => 'post_date',
  'order' => 'ASC',
  'post_type' => 'titles_seccion_home',
  'post_status' => 'publish',
  'category_name' => "hacemos_parte",
]);
?>
<?php $urlTemplate = get_template_directory_uri() ?>

<section class="homePage">
  <div class="homePage__banner">
    <?php
    echo do_shortcode('[serious-slider id=3]');
    ?>
  </div>
  <div class="section-what-do">
    <div class="container">
      <h1 class="sub-title">¿Qué hacemos?</h1>
      <div class="items">

        <?php
        if ($queHacemos->have_posts()):
          while ($queHacemos->have_posts()):
            $queHacemos->the_post();
            ?>
            <div class="item">
              <div class="item__box">
                <div class="item__box--title">
                  <h3 class="item-title">
                    <?php the_title(); ?>
                  </h3>
                </div>
                <p class="item-paragraph">
                  <?php the_content(); ?>
                </p>
                <a target="_blank" href="<?php the_field('url_que_hacemos'); ?>"
                  style="background-color: <?php echo the_field('colorSeeMore'); ?>;" class="see-more">conoce más</a>
              </div>
              <div class="item__box item__box--not">
                <?php echo the_post_thumbnail() ?>
              </div>
            </div>
          <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
  <div class="section-promote">
    <img src="<?php echo "$urlTemplate/assets/images/fox.png" ?>" alt="logo" class="logo" />
    <div class="section-promote__content">
      <?php
      if ($aprenderApromover->have_posts()):
        while ($aprenderApromover->have_posts()):
          $aprenderApromover->the_post();
          ?>
          <h2 class="title-h2">
            <?php the_title(); ?>
          </h2>
          <?php the_content(); ?>
          <a href="<?php the_field('urlSeeMore'); ?>" class="see-more"
            style="background-color: <?php the_field('colorSeeMore'); ?>">conoce más</a>
        <?php endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
    <img src="<?php echo "$urlTemplate/assets/images/turtole.png" ?>" alt="logo" class="logo" />
  </div>
  <div class="section-working">
    <div class="container">
      <div class="section-working__title">
        <h2 class="title-h2">
          <?php
          if ($titleHemosTrabajadoCon->have_posts()):
            while ($titleHemosTrabajadoCon->have_posts()):
              $titleHemosTrabajadoCon->the_post();
              ?>
              <?php the_title() ?>
            <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </h2>
      </div>
      <div class="section-working__brands">
        <?php
        if ($hacemosTrabajoCon->have_posts()):
          while ($hacemosTrabajoCon->have_posts()):
            $hacemosTrabajoCon->the_post();
            ?>
            <?php echo the_post_thumbnail() ?>
          <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
      <div class="center">
        <a href="/contac" class="see-more see-more--dark">¡Trabajemos juntos!</a>
      </div>
    </div>
  </div>
  <div class="section-working section-working--two">
    <div class="container">
      <div class="section-working__title">
        <h2 class="title-h2">
          <?php
          if ($titleHacemosParte->have_posts()):
            while ($titleHacemosParte->have_posts()):
              $titleHacemosParte->the_post();
              ?>
              <?php the_title() ?>
            <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </h2>
      </div>
      <div class="section-working__brands">
        <?php
        if ($hacemosParteDe->have_posts()):
          while ($hacemosParteDe->have_posts()):
            $hacemosParteDe->the_post();
            ?>
            <?php echo the_post_thumbnail() ?>
          <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>
<div class="networks">
  <?php
  if ($redesSociales->have_posts()):
    while ($redesSociales->have_posts()):
      $redesSociales->the_post();
      ?>
      <a target="_blank" href="<?php the_field('urlSeeMore'); ?>" class="item">
        <img src="<?php the_field('link-img'); ?>" alt="img" class="img" />
      </a>
    <?php endwhile;
  endif;
  wp_reset_postdata();
  ?>
</div>
<?php get_footer();