<?php

// Custom Post types for Feature project on home page
	   add_action('init', 'create_feature');
	     function create_feature() {
	       $feature_args = array(
	          'labels' => array(
	           'name' => __( 'Banner' ),
	           'singular_name' => __( 'Banner' ),
	           'add_new' => __( 'Add New Banner' ),
	           'add_new_item' => __( 'Add New Banner' ),
	           'edit_item' => __( 'Edit Banner' ),
	           'new_item' => __( 'Add New Banner' ),
	           'view_item' => __( 'View Banner' ),
	           'search_items' => __( 'Search Banner' ),
	           'not_found' => __( 'No banner found' ),
	           'not_found_in_trash' => __( 'No banner found in trash' )
	         ),
	       'public' => false,
	       'show_ui' => true,
         'show_in_nav_menus' => false,
			   'show_tagcloud'     => false,
	       'hierarchical' => false,
         'query_var'         => false,
			   'rewrite'           => false,
	       'menu_position' => 20,
         'supports' => array('title', 'custom-fields'),
        'publicly_queriable' => true,  // you should be able to query it
        'exclude_from_search' => true,  // you should exclude it from search results
        'has_archive' => false,  // it shouldn't have archive page
	     );
	  register_post_type('banner',$feature_args);
	}
	add_filter("manage_feature_edit_columns", "feature_edit_columns");

	function feature_edit_columns($feature_columns){
	   $feature_columns = array(
	      "cb" => "<input type=\"checkbox\" />",
	      "title" => "Title",
	   );
	  return $feature_columns;
	}


	//Add Meta Boxes
	//http://wp.tutsplus.com/tutorials/plugins/how-to-create-custom-wordpress-writemeta-boxes/

	add_action( 'add_meta_boxes', 'cd_meta_box_add' );
	function cd_meta_box_add()
	{
		add_meta_box( 'my-meta-box-id', 'Banner Details', 'cd_meta_box_cb', 'banner', 'normal', 'high' );
	}

	function my_admin_scripts() {
	    wp_enqueue_script('media-upload');
	    wp_enqueue_script('thickbox');
	    wp_register_script('my-upload', get_template_directory_uri() . '/js/my-script.js', array('jquery','media-upload','thickbox'));
	    wp_enqueue_script('my-upload');
	}

	function my_admin_styles() {

	    wp_enqueue_style('thickbox');
	}
	add_action('admin_print_scripts', 'my_admin_scripts');
	add_action('admin_print_styles', 'my_admin_styles');

	function cd_meta_box_cb( $post )
	{
		$values = get_post_meta($post->ID);

		wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

		$title = isset( $values['banner_anchor_title'] ) ? esc_attr( $values['banner_anchor_title'][0] ) : "";
		$alt_text = isset( $values['banner_anchor_alt_text'] ) ? esc_attr( $values['banner_anchor_alt_text'][0] ) : "";
		$link = isset( $values['banner_anchor_link'] ) ? esc_attr( $values['banner_anchor_link'][0] ) : "";
		$url = isset( $values['banner_anchor_img_link'] ) ? esc_attr( $values['banner_anchor_img_link'][0] ) : "";
	?>

		<table class="banner_table">
			<thead>
				<tr>
					<th>Field</th>
					<th>Value</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Title</td>
					<td>
						<textarea name="banner_anchor_title" id="banner_anchor_title" rows="2" cols="30"><?php echo $title; ?></textarea>
					</td>
				</tr>
				<tr>
					<td>Alt Text</td>
					<td>
						<textarea name="banner_anchor_alt_text" id="banner_anchor_alt_text" rows="2" cols="30"><?php echo $alt_text; ?></textarea>
					</td>
				</tr>
				<tr>
					<td>Anchor Link</td>
					<td>
						<input name="banner_anchor_link" type="text" size="13" id="banner_anchor_link" value="<?php echo $link; ?>">
					</td>
				</tr>
				<tr>
					<td>Image Link</td>
					<td>
						<input name="banner_anchor_img_link" type="text" size="13" id="banner_anchor_img_link" value="<?php echo $url; ?>">
						<img src="<?php echo $url;?>" style="width:200px;" id="picsrc" />
						<input id="upload_image_button" type="button" value="Upload Image" />
					</td>
				</tr>
			</tbody>
		</table>

		<style>
			.banner_table {
				margin: 0;
		    width: 100%;
		    text-align: center;
		    border: 1px solid #cccccc;
			}

			.banner_table tr {
				vertical-align: top;
			}

			.banner_table thead th:first-child {
				width: 15%;
			}

			.banner_table thead th {
				background-color: #f1f1f1;
				padding: 5px 8px 8px;
			}

			.banner_table textarea,
			.banner_table input[type="text"] {
				width: 98%;
				margin: 8px;
			}
		</style>

		<?php
	}

	add_action( 'save_post', 'cd_meta_box_save' );
	function cd_meta_box_save( $post_id ) {
		// Bail if we're doing an auto save
		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

		// if our nonce isn't there, or we can't verify it, bail
		if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

		// if our current user can't edit this post, bail
		if( !current_user_can( 'edit_post' ) ) return;

		// now we can actually save the data
		$allowed = array(
			'a' => array( // on allow a tags
				'href' => array() // and those anchors can only have href attribute
			)
		);

		// Make sure your data is set before trying to save it
	 if( isset( $_POST['banner_anchor_title'] ) )
			 update_post_meta( $post_id, 'banner_anchor_title', esc_attr( wp_strip_all_tags( $_POST['banner_anchor_title'] ) ) );

	 if( isset( $_POST['banner_anchor_alt_text'] ) )
			 update_post_meta( $post_id, 'banner_anchor_alt_text', esc_attr( wp_strip_all_tags($_POST['banner_anchor_alt_text'] ) ) );

		if( isset( $_POST['banner_anchor_link'] ) ) {
				$url = $_POST['banner_anchor_link'];
				update_post_meta( $post_id, 'banner_anchor_link', esc_attr( $url ) );
		}

		if( isset( $_POST['banner_anchor_img_link'] ) ) {
				$url = $_POST['banner_anchor_img_link'];
				update_post_meta( $post_id, 'banner_anchor_img_link', esc_attr( $url ) );
		}


	}

/*
function init_remove_support(){
    $post_type = 'banner';
    remove_post_type_support( $post_type, 'editor');
}
add_action('init', 'init_remove_support',100);

add_filter('user_can_richedit', 'disable_wyswyg_for_custom_post_type');
function disable_wyswyg_for_custom_post_type( $default ){
  if( get_post_type() === 'banner') return false;
  return $default;
}*/



/**
 * Make the "Featured Image" metabox front and center when editing a header-image post.
 */
function sixohthree_feature_metaboxes( $post ) {
    global $wp_meta_boxes;

    remove_meta_box('postimagediv', 'banner', 'side');
    add_meta_box('postimagediv', __('Featured Image'), 'post_thumbnail_meta_box', 'banner', 'normal', 'high');
}
add_action( 'add_meta_boxes_feature', 'sixohthree_feature_metaboxes' );


function custom_admin_post_thumbnail_html( $content ) {
    return $content = str_replace( __( 'Set featured image' ), __( 'Set featured image - 300px by 300px' ), $content );
}

add_filter( 'admin_post_thumbnail_html', 'custom_admin_post_thumbnail_html' );

function the_anchor_title() {
	echo get_post_meta( get_the_ID(), "banner_anchor_title", true);
}

function the_anchor_alt() {
	echo get_post_meta( get_the_ID(), "banner_anchor_alt_text", true);
}

function get_the_anchor_link() {
	return get_post_meta( get_the_ID(), "banner_anchor_link", true);
}

function the_anchor_link() {
	echo get_the_anchor_link();
}

function has_anchor_img_link() {
	$anchor = get_post_meta( get_the_ID(), "banner_anchor_img_link", true);
	if ( !empty($anchor) ){
		return true;
	}
	return false;
}

function get_the_anchor_img_link() {
	return get_post_meta( get_the_ID(), "banner_anchor_img_link", true);
}

function the_anchor_img_link() {
	echo get_the_anchor_img_link();
}

function has_anchor_link() {
	$anchor = get_post_meta( get_the_ID(), "banner_anchor_link", true);
	if ( !empty($anchor) ){
		return true;
	}
	return false;
}

function has_anchor_title() {
	$anchor = get_post_meta( get_the_ID(), "banner_anchor_title", true);
	if ( !empty($anchor) ){
		return true;
	}
	return false;
}

function has_anchor_alt() {
	$anchor = get_post_meta( get_the_ID(), "banner_anchor_alt_text", true);
	if ( !empty($anchor) ){
		return true;
	}
	return false;
}

















  //hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires

add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );

function create_topics_nonhierarchical_taxonomy() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'Sections', 'taxonomy general name' ),
    'singular_name' => _x( 'Section', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Sections' ),
    'popular_items' => __( 'Popular Sections' ),
    'all_items' => __( 'All Sections' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Section' ),
    'update_item' => __( 'Update Section' ),
    'add_new_item' => __( 'Add New Section' ),
    'new_item_name' => __( 'New Section Name' ),
    'separate_items_with_commas' => __( 'Separate sections with commas' ),
    'add_or_remove_items' => __( 'Add or remove section' ),
    'choose_from_most_used' => __( 'Choose from the most used sections' ),
    'menu_name' => __( 'Sections' ),
  );

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('section','banner',array(
    'hierarchical' => true,
		'public' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'section' ),
  ));
}




class Banner_Widget extends WP_Widget{

	public function __construct(){
		parent::__construct(
			'banner_widget',
			__( 'Banner Widget' ),
			array(
				'description' 	=> __( 'Displays the banner widget.' )
			)
		);
	}
	public function widget( $args, $instance ){

		$title 		=	isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
    $category1      = isset( $instance[ 'category1' ] ) ? $instance[ 'category1' ] : '';

		$featured_post_a = new WP_Query( array(
			'posts_per_page' => '5',
			'tax_query' => array(
	      array(
	        'taxonomy' => 'section',
	        'field' => 'id',
	        'terms' => $category1,
	      )
	     ),
	    'post_type' => 'banner',
			'order'               => 'ASC',
       'orderby'              => 'date'
		) );

		if ( $featured_post_a->have_posts() ) :
		  ?>
		  <style>
		    .ads {
		      padding:0;
		    }

		    .ads:nth-child(-n+3) {
		      padding-bottom:5px;
		    }

		    .ads:nth-child(even) {
		      padding-left:5px;
		    }

		    .ads:nth-child(odd) {
		      padding-right:5px;
		    }

		    .ads:nth-child(n+3) {
		      padding-top:5px;
		      padding-bottom:5px;
		    }

				.bw-row {
					position: relative;
				}

				.bw-column-2 {
					float: left;
					width: 50%;
				}

				.clearfix:before,
				.clearfix:after {
					content: "";
					display: table;
				}

				.clearfix:after {
					clear: both;
				}

				.clearfix {
					zoom: 1;
				}

				.bw-widget-title {
					text-align: center;
			    background-color: #2f2f2f;
			    color: white;
			    padding: 6px 6px;
			    border: 1px solid #f1f1f1;
			    border-radius: 8px;
					font-size: 1.8rem;
    			line-height: 2.2rem;
				}
		  </style>

			<div class="bw-row">
				<h2 class="bw-widget-title"><?php echo $title; ?></h1>
			</div>
		  <div class="bw-row clearfix"> <?php
		  while( $featured_post_a->have_posts() ) : $featured_post_a->the_post();

		    $field = get_post_custom( get_the_ID() );
		    ?> <div class="ads bw-column-2"> <?php
		    if ( has_anchor_link() ) { ?>
		      <a href="<?php echo ( has_shortcode( get_the_anchor_link(), 'link_alt' ) ? do_shortcode( get_the_anchor_link() ) : get_the_anchor_link() ); ?>" target="_blank">
		    <?php } ?>
		        <img
		          class="img-responsive"
		          src="<?php the_anchor_img_link(); ?>"
		          <?php if ( has_anchor_alt() ) { ?> alt="<?php the_anchor_alt(); ?>" <?php } ?>
		          <?php if ( has_anchor_title() ) { ?> title="<?php the_anchor_title(); ?>" <?php } ?>
		        />
		    <?php if ( has_anchor_link() ) { ?>
		      </a>
		    <?php }
		    ?> </div> <?php
		  endwhile;
		  ?> </div> <?php
		endif;

		wp_reset_query();



	}
	public function form( $instance ){
		$instance = wp_parse_args(
			(array) $instance, array(
				'title' 	=> '',
				'category1' 	=> ''
			)
		);
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>" ><?php _e( 'Title:','tierone' ); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $instance[ 'title' ] ); ?>" placeholder="<?php _e( 'Module Title', 'tierone' ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'category1' ); ?>" ><?php _e( 'Category 1:','tierone' ); ?></label>
			<select class="widefat" id="<?php echo $this->get_field_id( 'category1' ); ?>" name="<?php echo $this->get_field_name( 'category1' ); ?>">
				<?php foreach( get_terms(['taxonomy' => 'section','hide_empty' => false]) as $term) { ?>
					<option <?php selected( $instance['category1'], $term->term_id ); ?> value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
				<?php } ?>
			</select>
		</p>

		<?php
	}
	public function update( $new_instance,$old_instance ){
		$instance 	= $old_instance;
		$instance['title'] = strip_tags( stripslashes( $new_instance[ 'title' ] ) );
		$instance['category1'] = $new_instance[ 'category1' ];
		return $instance;
	}

}


register_widget( 'banner_widget' );
