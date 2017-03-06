<?php get_header(); ?>

<main class="container">
  <?php custom_breadcrumbs(); ?>
  <div class="bg">
  <div class="site">
    <section class="row flex clearfix">
      <div class="col-lg-8">
        <section>
          <header class="archive-header">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="h3 panel-title"><?php echo get_the_archive_title();	?> <?php post_type_archive_title(); ?></h1>
              </div>


              <?php

              // Display optional category description
              $term_description = term_description();
              if ( !empty($term_description) ) :
                  printf('<div class="panel-body">%s</div>', $term_description);
              endif; ?>
          </div>
          </header>
        </section>

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
