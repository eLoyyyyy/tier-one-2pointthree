    <footer>
      <div class="footer-widgets">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="about">
                <div class="about-header">
                  <p class="lead">About Us</p>
                </div>
                <div class="about-content">
                  <p>If I offend I'm sorry, please, please forgive. Ring-a-chong, a-ching-chong-chong-chong-ching. Today we're gonna talk about father and daughter relationships. And do not treat me like a murderer, I just like to pee, pee, pee. 'Cause you ain't never met nobody like me. That's why I on what I on cause I'm my mom.. I don't believe it, it's almost too good to be true. Everybody, listen up!. Inside of a hall with my framed autographed.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p class="lead">Hot Categories</p>
              <?php

              $cats = array();
              $args = array(
                /*'post_status' => array('publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', 'trash')*/
                'posts_per_page' => -1,
              );
              $query = new WP_Query($args);
              while( $query->have_posts() && count($cats) < 5 ) { $query->the_post();

                  $post_categories = wp_get_post_categories( get_the_ID() );

                  foreach($post_categories as $c){
                      $cat = get_category( $c );
                      $cats[] = $cat->slug;
                  }
                  $cats = array_unique($cats);
              } //endwhile
              $result = array_map('get_category_by_slug', $cats);
              ?><ul class="list-group top-categories"><?php
              foreach($result as $top) {
                ?><li class="list-group-item"><a href="<?php echo esc_url(get_category_link( $top->cat_ID )); ?> " target="_blank"><?php echo $top->name; ?></a> <span class="badge badge-primary"><?php echo $top->count; ?></span></li><?php
              }
              ?>
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <p class="lead">Follow Us on</p>
              <ul class="list-unstyled social-media-list">
                <li><a href="#" target="_blank">Facebook</a></li>
                <li><a href="#" target="_blank">Twitter</a></li>
                <li><a href="#" target="_blank">Google+</a></li>
                <li><a href="#" target="_blank">Pinterest</a></li>
                <li><a href="#" target="_blank">Linkedin</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="page-copyright">
        <div class="container text-center">
          <small><i class="fa fa-copyright"></i> Copyright <?php echo tierone_three_copyright(); ?>. All Rights Reversed.</small>
        </div>
      </div>
    </footer>


    <?php wp_footer(); ?>
    </body>
</html>
