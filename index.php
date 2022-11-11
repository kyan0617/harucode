<!-- header -->
<?php get_header(); ?>
  <!-- <main> -->
  <main>
    <div class="p-page">
      <div class="p-page__inner _wrapper">
        <?php if (have_posts()){ ?>
          <?php while (have_posts()) { the_post(); ?>
            <h2 class="p-page__title"><?php the_title(); ?></h2>

            <main class="p-page__main">
              <div class="p-page__container">
                <?php the_content(); ?>
              </div>
            </main>
          <?php } ?>
        <?php } ?>
      </div>
    </div>

    <?php get_template_part('l-contact'); ?>
  </main><!-- </main> -->
<!-- footer -->
<?php get_footer(); ?>