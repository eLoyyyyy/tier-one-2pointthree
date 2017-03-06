<?php

get_header(); ?>

<main class="container">
  <?php custom_breadcrumbs(); ?>
  <div class="bg">
    <div class="site">
  <?php the_post_thumbnail(); ?>
  <div class="row clearfix">
    <div class="col-lg-12">
      <h1><?php the_title(); ?></h1>
      <p class="lead"><?php echo get_the_excerpt(); ?></p>
      <p>
        <small><?php the_date(); ?></small>
        <small>by <?php the_author(); ?></small>
      </p>
      <div class="divider"></div>
      <div>
        <button class="facebook btn social-share">
          <i class="fa fa-facebook fa-fw"></i>
          share
        </button>
        <button class="twitter btn social-share" data-share="twitter">
            <i class="fa fa-twitter fa-fw" aria-hidden="true"></i> tweet
        </button>
        <button class="linkedin btn social-share" data-share="linkedin">
            <i class="fa fa-linkedin fa-fw" aria-hidden="true"></i> share
        </button>
        <button class="reddit btn social-share" data-share="reddit" target='_blank' href=''>
            <i class="fa fa-reddit-alien fa-fw " aria-hidden="true"></i> reddit it!
        </button>
        <?php $image = ( has_post_thumbnail() ) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' )[0] : get_first_image() ; ?>
        <button class="pinterest btn social-share" data-share="pinterest" data-title="<?php urlencode(the_title()) ;?>" data-image="<?php echo esc_url( $image ); ?>">
            <i class="fa fa-pinterest fa-fw " aria-hidden="true"></i> pin
        </button>
        <button class="google-plus btn social-share" data-share="google-plus">
            <i class="fa fa-google-plus fa-fw social-share" aria-hidden="true"></i> share
        </button>
        <div class="fb-save" data-uri="<?php the_permalink(); ?>" data-size="large"></div>
        <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
      </div>
      <div class="divider"></div>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-lg-8">

      <?php the_content(); ?>

      <div class="divider"></div>

      <section class="section">
          <?php if ( has_tag() ) : ?>
              <h2 class="h2">Read more articles about</h2>
              <ul class="list-inline tags">
               <?php /*the_tags('<ul class="list-inline black-border"><li>','</li><li>','</li></ul>');*/
                  tierone_tags();
              ?>
              </ul>

          <?php endif; ?>
      </section>

      <div class="divider"></div>

      <?php
          get_template_part( 'content', 'related' ); //related post
      ?>
    </div>
    <div class="col-lg-4">
      <?php get_sidebar(); ?>
    </div>
  </div>


  <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-width="100%"></div>

  <div itemprop="interactionStatistic" itemscope itemtype="http://schema.org/InteractionCounter">
      <meta itemprop="interactionType" content="http://schema.org/CommentAction"/>
      <meta itemprop="userInteractionCount" content="<?php echo get_comments_number(); ?>" />
  </div>


  <?php
      comments_template();
  ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
