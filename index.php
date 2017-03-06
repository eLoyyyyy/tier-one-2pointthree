<?php get_header(); ?>

<main class="container">
  <div class="bg">
    <div class="site">
    <section class="row flex clearfix">
      <div class="col-lg-8">

        <?php if ( have_posts() ) : ?>
          <?php while( have_posts() ) : the_post(); ?>
            <div class="media">
              <?php _featured_image(); ?>
              <div class="media-body">
                <h4 class="media-heading"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> <?php var_dump((WEEK_IN_SECONDS * 2) > (current_time( 'timestamp' )-get_the_time( 'U' ))) ; ?></h4>
                <p class="media-details"><?php echo getPostViews(get_the_ID());?> | <?php echo get_comments_number( get_the_ID() );?> comments | <?php the_author();?> </p>
                <p>Tags: <?php tierone_tags(); ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="col-lg-4">
        <?php get_sidebar(); ?>
      </div>

    </section>
    <?php tierone_three_pagination(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
