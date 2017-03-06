<?php get_header(); ?>

<main class="container ">
  <?php custom_breadcrumbs(); ?>
  <div class="site">
    <section class="row flex clearfix">
      <div class="col-lg-8">
        <section>
          <header class="archive-header">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="h3 panel-title"><?php printf( esc_html__( 'Search Results for: %s', 'tierone-three' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
              </div>
            </div>
          </header>
        </section>

        <?php if ( have_posts() ) : ?>
          <?php while( have_posts() ) : the_post(); ?>
            <div class="media"> <!--
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="<?php echo get_stylesheet_directory_uri() . '/images/default.jpg'; ?>" alt="...">
                </a>
              </div> -->
              <div class="media-body">
                <h4 class="media-heading search-title"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h4>
                <p class="media-details"><?php echo getPostViews(get_the_ID());?> | <?php echo get_comments_number( get_the_ID() );?> comments | <?php the_author();?> </p>
                <p><?php echo get_the_excerpt(); ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="col-lg-4">
        <?php get_sidebar(); ?>
      </div>

      <?php tierone_three_pagination(); ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>
