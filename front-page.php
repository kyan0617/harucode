<!-- header -->
<?php get_header(); ?>
<!-- <main> -->
<main>

  <!-- <p-top> -->
  <section class="p-top">
    <div class="p-top__inner">

      <!-- <記事リスト> -->
      <ul class="p-top__list">
        <!-- <記事ループ> -->
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

        <!-- <記事ループアイテム> -->
        <li class="p-top__item">
          <a href="<?php the_permalink(); ?>" class="p-top__link">
            <!-- <記事アイキャッチ> -->
            <div class="p-top__img">
              <?php if (has_post_thumbnail()) { ?>
              <?php the_post_thumbnail('full'); ?>
              <?php } else { ?>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/_static/dist/img/eye_catch.jpg"
                alt="haru code">
              <?php } ?>
            </div>
            <!-- <記事タグ> -->
            <div class="p-top__tag">
              <p class="p-top__tag-text">
                <?php $cat = get_the_category();
                    $cat = $cat[0]; {
                      echo $cat->cat_name;
                    } ?>
              </p>
            </div>
            <!-- <記事タイトル> -->
            <div class="p-top__title">
              <h2 class="p-top__title-text">
                <?php the_title(); ?>
              </h2>
            </div>
          </a>
        </li><!-- </記事ループアイテム> -->
        <?php
          }
        }
        wp_reset_postdata();
        ?>
      </ul><!-- </記事リスト> -->

      <div class="p-archive-main__pagination">
        <?php
        if ($the_query->max_num_pages > 1) {
          echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%/',
            'type' => 'list',
            'prev_text' => '',
            'next_text' => '',
            'current' => max(1, $paged),
            'mid_size' => 1,
            'total' => $the_query->max_num_pages
          ));
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section><!-- </p-top> -->

</main><!-- </main> -->
<!-- footer -->
<?php get_footer(); ?>