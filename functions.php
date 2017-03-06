<?php

if ( !defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly
endif;

function jquery_enqueue_with_fallback() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery-js' , 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), false, true );
    wp_add_inline_script( 'jquery-js', 'window.jQuery||document.write(\'<script src="'.esc_url(includes_url()).'libs/js/jquery.js"><\/script>\')' );
    wp_enqueue_script( 'jquery-js' );

}
add_action( 'wp_enqueue_scripts' , 'jquery_enqueue_with_fallback' );

function tier_one_three_styles_scripts(){

    wp_register_style('indo-lp-concept-style', get_stylesheet_directory_uri() . '/css/style.min.css');
    wp_enqueue_style('indo-lp-concept-style');
    wp_register_script('indo-lp-concept-script', get_stylesheet_directory_uri() . '/js/scripts.min.js', array('jquery-js'), false, true);
    wp_enqueue_script('indo-lp-concept-script');

    wp_enqueue_style('google-noto', 'https://fonts.googleapis.com/css?family=Noto+Serif');
    wp_enqueue_style('material-icon', 'http://fonts.googleapis.com/icon?family=Material+Icons');
}
add_action('wp_enqueue_scripts', 'tier_one_three_styles_scripts');

function above_the_fold_css_shit(){
  ?><style type="text/css">
     <?php include get_stylesheet_directory() . '/css/critical.min.php'; ?>
  </style><?php
}
add_action( 'wp_head','above_the_fold_css_shit');

register_nav_menu( 'primary', __( 'Primary Menu', 'tier-one-three' ) );

register_nav_menu( 'secondary', __( 'Secondary Menu', 'tier-one-three' ) );

/* custom background */
if ( ! function_exists( 'change_custom_background_cb' ) ) :

    function change_custom_background_cb() {
        $background = get_background_image();
        $color = get_background_color();

        if ( ! $background && ! $color )
            return;

        $style = $color ? "background-color: #$color;" : '';

        if ( $background ) {
            $image = " background-image: url('$background');";
            $repeat = get_theme_mod( 'background_repeat', 'repeat' );

            if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
                $repeat = 'repeat';

            $repeat = " background-repeat: $repeat;";
            $position = get_theme_mod( 'background_position_x', 'left' );

            if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
                $position = 'left';

            $position = " background-position: top $position;";
            $attachment = get_theme_mod( 'background_attachment', 'scroll' );

            if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
                $attachment = 'scroll';

            $attachment = " background-attachment: $attachment;";
            $style .= $image . $repeat . $position . $attachment;
        }
        ?>
            <style type="text/css" id="custom-background-css">
                .custom-background { <?php echo trim( $style ); ?> }
            </style>
        <?php
    }

endif;

function tier_one_three_setup_theme(){

    global $wp_version;

    add_theme_support( 'nav-menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array('aside','image','video') );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );

    if ( version_compare( $wp_version, '3.4', '>=' ) ) {
        add_theme_support( 'custom-background', array( 'wp-head-callback' => 'change_custom_background_cb','default-color' => 'e7e6e4' ) );
    }
    else {
        add_custom_background('change_custom_background_cb');
    }

    add_image_size( 'index', 300, 190, true);
    add_image_size( 'next_prev_post', 100, 112, true);
    add_image_size( 'multi_tab', 111, 64, true);
    add_image_size( 'recent_image', 135, 135, true);

}
add_action( 'after_setup_theme', 'tier_one_three_setup_theme' );


require get_stylesheet_directory() . '/inc/wp_bootstrap_navwalker.php';

require get_stylesheet_directory() . '/inc/wp_bootstrap_comments.php';

require get_stylesheet_directory() . '/inc/breadcrumbs.php';

require get_stylesheet_directory() . '/inc/reset.php';

require get_stylesheet_directory() . '/inc/mobile_menu_navwalker.php';

function pagination($pages = '', $range = 4) {
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<ul class=\"pagination center-align\">";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class=\"waves-effect\"><a href='".get_pagenum_link(1)."'>&laquo; First</a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li class=\"waves-effect\"><a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a></li>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class=\"active\"><a href=\"\" class=\"inactive palette white-text\">".$i."</a></li>":"<li class=\"waves-effect\"><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li class=\"waves-effect\"><a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a></lili>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class=\"waves-effect\"><a href='".get_pagenum_link($pages)."'>Last &raquo;</a><li>";
         echo "</ul>\n";
     }
}

function tierone_three_pagination() {
  ?><div class="text-center"><?php
    global $wp_query;
    pagination($wp_query->max_num_pages, 2);
  ?></div><?php
}

require get_stylesheet_directory() . '/inc/view-system.php';

function comment_count( $count ) {
  if ( ! is_admin() ) {
    global $id;
    $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
    return count($comments_by_type['comment']);
  } else {
    return $count;
  }
}
add_filter('get_comments_number', 'comment_count', 0);

function tierone_tags(){

    $posttags = get_the_tags();
    if ($posttags) {
      foreach($posttags as $tag) {
        ?><a href="<?php echo get_tag_link($tag->term_id); ?>"><span class="label label-primary label-tag break" itemprop="keywords"><?php echo $tag->name; ?></span></a><?php
      }
    }
}

function remove_forced_excerpt(){
    remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
}
add_action( 'init', 'remove_forced_excerpt' );

function if_file_exists($image){
    stream_context_set_default(
        array(
            'http' => array(
                'method' => 'HEAD'
            )
        )
    );
    $headers = get_headers($image, 1);
    return stristr($headers[0], '200');
}

/**
 * Only use 'hentry' for post types with author and published date
 */
function remove_hentry( $classes, $class, $post_id ) {
    $hentry_post_types = array(
        'page'
    );

    $post_type = get_post_type( $post_id );

    if ( !in_array( $post_type, $hentry_post_types ) ) {
        $classes = array_diff( $classes, array( 'hentry' ) );
    }

    return $classes;
}
add_filter( 'post_class', 'remove_hentry', 10, 3 );

// Exclude images from search results - WordPress
function exclude_images_from_search_results() {
	global $wp_post_types;
	$wp_post_types['attachment']->exclude_from_search = true;
}
add_action( 'init', 'exclude_images_from_search_results' );

function facebook_javascript_sdk(){
    ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <?php
}

function tierone_three_copyright() {
    global $wpdb;
    $copyright_dates = $wpdb->get_results("
        SELECT
            YEAR(min(post_date_gmt)) AS firstdate,
            YEAR(max(post_date_gmt)) AS lastdate
        FROM
            $wpdb->posts
        WHERE
            post_status = 'publish'
    ");
    $output = '';
    if($copyright_dates) {
        $copyright = '<span>'.$copyright_dates[0]->firstdate.'</span>';
        if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
            $copyright .= ' - ' . $copyright_dates[0]->lastdate;
        }
        $output = $copyright;
    }
    return $output;
}

function get_first_image(){
   preg_match( '/<img .+src=[\'"]([^\'"]+)[\'"].*>/i', get_the_content() ,$matches);
   return isset($matches[1]) ? $matches[1]: false;
}

function _featured_image_url(){
    if ( is_single() ) :
        return wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?: get_first_image();
    else :
        return wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?: get_first_image() ?: get_template_directory_uri() . "/images/default.jpg";
    endif;

}

function _featured_image(){?>
    <figure class="figure media-left" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
        <?php $file = _featured_image_url(); ?>

        <?php
        if ( if_file_exists($file) ) :
            list($width, $height, $type, $attr) = getimagesize($file);  ?>
            <meta itemprop="width" content="<?php echo $width; ?>">
            <meta itemprop="height" content="<?php echo $height; ?>">
        <?php else : ?>
            <meta itemprop="width" content="">
            <meta itemprop="height" content="">
        <?php endif; ?>
        <link itemprop="url" href="<?php echo $file; ?>">
        <a href="<?php the_permalink(); ?>">
            <img class="media-object soft-crop" src="<?php echo $file; ?>" onerror="javascript:this.src='<?php echo get_template_directory_uri() . "/images/default.jpg"; ?>'" itemprop="contentUrl">
        </a>
    </figure>
<?php
}

function _pre_post_meta(){?>
    <header class="genpost-entry-header">
        <link itemprop="mainEntityOfPage" href="<?php echo esc_url( get_permalink() );?>" />
        <span itemprop="author" itemscope itemtype="http://schema.org/Person"><?php ; ?>
            <link itemprop="url" href="<?php echo get_author_posts_url( the_author_meta( 'ID' ) ); ?>">
            <meta itemprop="name" content="<?php the_author(); ?>">
        </span>
        <meta itemprop="datePublished" content="<?php the_time('c'); ?> ">
        <meta itemprop="dateModified" content="<?php the_modified_time('c'); ?>">
        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
            <?php $logo = get_theme_mod( 'site_logo', '' );
            if ( !empty($logo) ) : ?>
            <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                <meta itemprop="url" content="<?php echo esc_url( $logo ); ?>">
            </span>
            <?php endif; ?>
            <meta itemprop="name" content="<?php bloginfo( 'name' ); ?>">
        </span>
        <?php
            global $lang_support;
            $lang = get_theme_mod( 'force_locale', 'en' );
        ?>
        <meta itemprop="inLanguage" content="<?php echo $lang_support['html'][$lang]; ?>">
    </header>
<?php
}


/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function tierone_three_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'tierone_three_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'tierone_three_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so tierone_three_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so tierone_three_categorized_blog should return false.
		return false;
	}
}



/*Sidebar*/
if ( !function_exists( 'tierone_three_main_sidebar' ) ):
    function tierone_three_main_sidebar() {

        register_sidebar( array(
            'name' => __( 'Main Sidebar', 'tierone_three' ),
            'id' => 'main-sidebar',
            'before_widget' => '<section id="%1$s" class="widget %1$s">',
            'after_widget' => '</section>',
            'before_title'  => '<div class="widget-title-container"><h2 class="widget-title">',
            'after_title' => '</h2></div>',
            'description' => __( 'Main Right Sidebar', 'tieronetwopointone' ),
        ) );

    }
    add_action( 'after_setup_theme', 'tierone_three_main_sidebar' );
endif;


/*require_once get_stylesheet_directory() . '/custom/slider.php';*/
