<!-- header -->
<?php get_header(); ?>
<!-- <main> -->
<main>

  <!-- <p-top> -->
  <section class="p-top">
    <div class="p-top__inner">
      <ul class="p-top__list">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 12,
        );
        $posts = get_posts($args);
        if ($posts) {
          foreach ($posts as $post) {
            setup_postdata($post);
        ?>
        <li class="p-top__item">
          <a href="<?php the_permalink(); ?>" class="p-top__link">
            <div class="p-top__img">
              <?php if (has_post_thumbnail()) { ?>
              <?php the_post_thumbnail('full'); ?>
              <?php } else { ?>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/_static/dist/img/eye_catch.jpg"
                alt="haru code">
              <?php } ?>
            </div>
            <div class="p-top__tag">
              <p class="p-top__tag-text">
                <?php the_category(); ?>
              </p>
            </div>
            <div class="p-top__title">
              <h2 class="p-top__tag-text">
                <?php the_title(); ?>
              </h2>
            </div>
          </a>
        </li>
        <?php
          }
        }
        wp_reset_postdata();
        ?>
      </ul>
    </div>
  </section><!-- </p-top> -->

</main><!-- </main> -->
<!-- footer -->
<?php get_footer(); ?>