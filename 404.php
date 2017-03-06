<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tierone-three
 */

get_header(); ?>

<main class="container" role="main">
  <?php custom_breadcrumbs(); ?>
  <div class="bg">
    <div class="site">
    	<section class="error-404 not-found">
    		<header class="page-header">
    			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'tierone-three' ); ?></h1>
    		</header><!-- .page-header -->

    		<div class="page-content">
    			<p>
    				<?php _e('We&#39;re sorry, but the page you&#39;re looking for does not exist.', 'tierone-three'); ?>
    				<?php
    				printf(
    						__('<a class="btn btn-large btn-primary" href="%s">Return to Home</a>', 'tieronetwopointone'),
    						home_url(),
    						esc_url( wp_get_referer() )
    						);
    				?>
          </p>

          <p><?php esc_html_e( 'Why don&#39;t you try and search for it?', 'tierone-three' ); ?></p>
    			<?php
    				get_search_form();
    			?>

          <?php
          $args = array(
              'posts_per_page' => 6,
          );
          $query = new WP_Query( $args );
          ?>
          <?php if ( $query->have_posts() ) : ?>
          <div class="row clearfix">
              <div class="strike">
                  <div class="bs-divider h3">Some of our latest posts.</div>
              </div>
              <div class="flexbox">
              <?php while( $query->have_posts() ) : $query->the_post(); ?>
                  <article class="col-lg-4 col-md-6 col-sm-12" > <!-- itemscope itemtype="http://schema.org/ItemPage" -->
                      <meta itemprop="relatedLink" content="<?php echo get_permalink();?>">
                      <div class="">
                          <figure class="figure text-center" > <!-- itemprop="image" itemscope itemtype="http://schema.org/ImageObject" -->
                              <?php if (has_post_thumbnail() ) { ?>
                              <!--  <meta itemprop="url" content="<?php the_post_thumbnail_url(); ?>"> -->
                              <?php
                                  $file = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                                  if (file_exists($file)) :
                                      list($width, $height, $type, $attr) = getimagesize($file);  ?>
                                      <!-- <meta itemprop="width" content="<?php echo $width; ?>">
                                      <meta itemprop="height" content="<?php echo $height; ?>"> -->
                                  <?php endif; ?>
                                      <img style="height:145px" class="img-responsive center-block"
                               src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" onerror="javascript:this.src='<?php echo get_template_directory_uri() . "/images/default.jpg"; ?>'" > <!-- itemprop="image" -->
                              <?php } else { ?>
                              <!-- <meta itemprop="url" content="<?php echo get_first_image(); ?>"> -->
                              <?php
                                  $file = get_first_image();
                                  if (file_exists($file)) :
                                      list($width, $height, $type, $attr) = getimagesize($file);  ?>
                                      <!-- <meta itemprop="width" content="<?php echo $width; ?>">
                                      <meta itemprop="height" content="<?php echo $height; ?>"> -->
                                  <?php endif; ?>
                                      <img class="img-responsive center-block" src="<?php echo get_first_image(); ?>" onerror="javascript:this.src='<?php echo get_template_directory_uri() . "/images/default.jpg"; ?>'" style="height:145px" /> <!-- itemprop="image" -->
                              <?php } ?>
                              <figcaption class="card-content text-center">
                                  <?php echo '<h1 class="h6">' . '<a rel="bookmark" href="' . get_permalink() . '" title="'. get_the_title() .'">' . get_the_title() . '</a></h1>';?>
                              </figcaption>
                          </figure>

                      </div>
                  </article>
              <?php endwhile; wp_reset_postdata(); ?>
              </div>
          </div>
          <?php endif; ?>

    		</div><!-- .page-content -->
    	</section><!-- .error-404 -->
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();
