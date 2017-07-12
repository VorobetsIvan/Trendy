<?php

// Setting
add_action('after_setup_theme', 'add_post_formats');
function add_post_formats(){
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'gallery', 'audio', 'video', 'quote','aside') );
	register_nav_menu( 'header_menu', 'Header Menu' );
}

// Load style and scripts
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	// Load style in header
	wp_enqueue_style( 'bootstrap_trendy', get_template_directory_uri().'/css/bootstrap.min.css', array(), null);
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), null);
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/css/main-style.css', array(), null);
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/owl-carousel/owl.carousel.css', array(), null);
	wp_enqueue_style( 'owl-carousel_theme', get_template_directory_uri().'/owl-carousel/owl.theme.css', array(), null);
	// for lt IE 9 
	wp_enqueue_script('html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js',array(), null);
	wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
	wp_enqueue_script('respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js',array(), null);
	wp_script_add_data('respond', 'conditional', 'lt IE 9');

	// Load scripts in footer
	wp_enqueue_script( 'jquery_js_h', get_template_directory_uri().'/js/jquery.min.js', array(), null, false);
	wp_enqueue_script( 'jquery_js_b', get_template_directory_uri().'/js/jquery.min.js', array(), null, true);

	wp_enqueue_script( 'parallax_js_h', get_template_directory_uri().'/js/parallax.min.js', array(), null, false);

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array(), null, true);
	wp_enqueue_script( 'owl-carousel_js', get_template_directory_uri().'/owl-carousel/owl.carousel.js', array(), null, true);
	wp_enqueue_script( 'scripts_js', get_template_directory_uri().'/js/scripts.js', array(), null, true);
	wp_enqueue_script( 'lineProgressbar_js', get_template_directory_uri().'/js/jquery.lineProgressbar.js', array(), null, false);

}


// Connect library to work with custom fields
require_once get_template_directory().'/carbon_fields/carbon-fields-plugin.php';
add_action('carbon_register_fields', 'reg_custom_my_fields');
function reg_custom_my_fields() {
	// For theme options
	require_once __DIR__ . '/custom_fields/theme-options.php';
	require_once __DIR__ . '/custom_fields/custom-fields.php';
};



// Create new type post Events
function custom_post_events(){
	$lables = array(
						'name' => 'Events',
						'singular_name' => 'Events',
						'add_new' => 'Add event',
						'all_items' => 'All events',
						'add_new_item' => 'Add event',
						'edit_item' => 'Edit event',
						'new_item' => 'New event',
						'view_item' => 'View event',
						'search_items' => 'Search event',
						'not_found' => 'No event found',
						'not_found_in_trash' => 'No event found in trash',
						'parent_item_colon' => 'Parent event',
						'menu_name' => 'Events'
					);
	$args = array(
						'labels' => $lables,
						'public' => true,
						'has_archive' => 'events',
						'publicly_queryable' => true,
						'query_var' => true,
						'rewrite' => true,
						'capability_type' => 'post',
						'menu_icon' => 'dashicons-calendar-alt',
						'hierarchical' => false,
						'supports' => array('title', 'editor','thumbnail'),
						'taxonomies' => array(),
						'menu_position' => 11,
						'exclude_from_search' => false
				);
	register_post_type('events', $args);
}
// Activation
add_action('init', 'custom_post_events');


// Create new type post Team
function custom_post_team(){
	$lables = array(
						'name' => 'Team',
						'singular_name' => 'Team',
						'add_new' => 'Add employee',
						'all_items' => 'All team',
						'add_new_item' => 'Add employee',
						'edit_item' => 'Edit employee',
						'new_item' => 'New employee',
						'view_item' => 'View employee',
						'search_items' => 'Search employee',
						'not_found' => 'No employee found',
						'not_found_in_trash' => 'No employee found in trash',
						'parent_item_colon' => 'Parent employee',
						'menu_name' => 'Team'
					);
	$args = array(
						'labels' => $lables,
						'public' => true,
						'has_archive' => 'team',
						'publicly_queryable' => true,
						'query_var' => true,
						'rewrite' => true,
						'capability_type' => 'post',
						'menu_icon' => 'dashicons-groups',
						'hierarchical' => false,
						'supports' => array('title', 'thumbnail'),
						'taxonomies' => array(),
						'menu_position' => 12,
						'exclude_from_search' => false
				);
	register_post_type('team', $args);
}
// Activation
add_action('init', 'custom_post_team');



// Create new type post WORKS
function custom_post_works(){
	$lables = array(
						'name' => 'Works',
						'singular_name' => 'Works',
						'add_new' => 'Add work',
						'all_items' => 'All works',
						'add_new_item' => 'Add work',
						'edit_item' => 'Edit work',
						'new_item' => 'New work',
						'view_item' => 'View work',
						'search_items' => 'Search work',
						'not_found' => 'No work found',
						'not_found_in_trash' => 'No work found in trash',
						'parent_item_colon' => 'Parent work',
						'menu_name' => 'Works'
					);
	$args = array(
						'labels' => $lables,
						'public' => true,
						'has_archive' => 'work',
						'publicly_queryable' => true,
						'query_var' => true,
						'rewrite' => true,
						'capability_type' => 'post',
						'menu_icon' => 'dashicons-screenoptions',
						'hierarchical' => false,
						'supports' => array('title', 'editor','thumbnail'),
						'taxonomies' => array(),
						'menu_position' => 13,
						'exclude_from_search' => false
				);
	register_post_type('work', $args);
}
// Activation
add_action('init', 'custom_post_works');


// Create new type post SERVICES
function custom_post_services(){
	$lables = array(
						'name' => 'Services',
						'singular_name' => 'Services',
						'add_new' => 'Add service',
						'all_items' => 'All service',
						'add_new_item' => 'Add service',
						'edit_item' => 'Edit service',
						'new_item' => 'New service',
						'view_item' => 'View service',
						'search_items' => 'Search service',
						'not_found' => 'No service found',
						'not_found_in_trash' => 'No service found in trash',
						'parent_item_colon' => 'Parent service',
						'menu_name' => 'Services'
					);
	$args = array(
						'labels' => $lables,
						'public' => true,
						'has_archive' => 'services',
						'publicly_queryable' => true,
						'query_var' => true,
						'rewrite' => true,
						'capability_type' => 'post',
						'menu_icon' => 'dashicons-hammer',
						'hierarchical' => false,
						'supports' => array('title', 'editor','thumbnail'),
						'taxonomies' => array(),
						'menu_position' => 14,
						'exclude_from_search' => false
				);
	register_post_type('services', $args);
}
// Activation
add_action('init', 'custom_post_services');


// Create new type post PRICES
function custom_post_prices(){
	$lables = array(
						'name' => 'Prices',
						'singular_name' => 'Prices',
						'add_new' => 'Add price',
						'all_items' => 'All price',
						'add_new_item' => 'Add price',
						'edit_item' => 'Edit price',
						'new_item' => 'New price',
						'view_item' => 'View price',
						'search_items' => 'Search price',
						'not_found' => 'No price found',
						'not_found_in_trash' => 'No price found in trash',
						'parent_item_colon' => 'Parent price',
						'menu_name' => 'Prices'
					);
	$args = array(
						'labels' => $lables,
						'public' => true,
						'has_archive' => 'prices',
						'publicly_queryable' => true,
						'query_var' => true,
						'rewrite' => true,
						'capability_type' => 'post',
						'menu_icon' => 'dashicons-chart-bar',
						'hierarchical' => false,
						'supports' => array('title'),
						'taxonomies' => array(),
						'menu_position' => 15,
						'exclude_from_search' => false
				);
	register_post_type('prices', $args);
}
// Activation
add_action('init', 'custom_post_prices');


// Create new type post TESTIMONIALS
function custom_post_testimonials(){
	$lables = array(
						'name' => 'Testimonials',
						'singular_name' => 'Testimonials',
						'add_new' => 'Add testimonial',
						'all_items' => 'All testimonial',
						'add_new_item' => 'Add testimonial',
						'edit_item' => 'Edit testimonial',
						'new_item' => 'New testimonial',
						'view_item' => 'View testimonial',
						'search_items' => 'Search testimonial',
						'not_found' => 'No testimonial found',
						'not_found_in_trash' => 'No testimonial found in trash',
						'parent_item_colon' => 'Parent testimonial',
						'menu_name' => 'Testimonials'
					);
	$args = array(
						'labels' => $lables,
						'public' => true,
						'has_archive' => 'testimonials',
						'publicly_queryable' => true,
						'query_var' => true,
						'rewrite' => true,
						'capability_type' => 'post',
						'menu_icon' => 'dashicons-format-status',
						'hierarchical' => false,
						'supports' => array('title', 'editor', 'thumbnail'),
						'taxonomies' => array(),
						'menu_position' => 16,
						'exclude_from_search' => false
				);
	register_post_type('testimonials', $args);
}
// Activation
add_action('init', 'custom_post_testimonials');


// Create new type post CLIENTS
function custom_post_clients(){
	$lables = array(
						'name' => 'Clients',
						'singular_name' => 'Clients',
						'add_new' => 'Add client',
						'all_items' => 'All client',
						'add_new_item' => 'Add client',
						'edit_item' => 'Edit client',
						'new_item' => 'New client',
						'view_item' => 'View client',
						'search_items' => 'Search client',
						'not_found' => 'No client found',
						'not_found_in_trash' => 'No client found in trash',
						'parent_item_colon' => 'Parent client',
						'menu_name' => 'Clients'
					);
	$args = array(
						'labels' => $lables,
						'public' => true,
						'has_archive' => 'clients',
						'publicly_queryable' => true,
						'query_var' => true,
						'rewrite' => true,
						'capability_type' => 'post',
						'menu_icon' => 'dashicons-heart',
						'hierarchical' => false,
						'supports' => array('title', 'thumbnail'),
						'taxonomies' => array(),
						'menu_position' => 17,
						'exclude_from_search' => false
				);
	register_post_type('clients', $args);
}
// Activation
add_action('init', 'custom_post_clients');


// Create new type post FACTS
function custom_post_facts(){
	$lables = array(
						'name' => 'Facts',
						'singular_name' => 'Facts',
						'add_new' => 'Add fact',
						'all_items' => 'All fact',
						'add_new_item' => 'Add fact',
						'edit_item' => 'Edit fact',
						'new_item' => 'New fact',
						'view_item' => 'View fact',
						'search_items' => 'Search fact',
						'not_found' => 'No fact found',
						'not_found_in_trash' => 'No fact found in trash',
						'parent_item_colon' => 'Parent fact',
						'menu_name' => 'Facts'
					);
	$args = array(
						'labels' => $lables,
						'public' => true,
						'has_archive' => 'facts',
						'publicly_queryable' => true,
						'query_var' => true,
						'rewrite' => true,
						'capability_type' => 'post',
						'menu_icon' => 'dashicons-lightbulb',
						'hierarchical' => false,
						'supports' => array('title', 'thumbnail'),
						'taxonomies' => array(),
						'menu_position' => 17,
						'exclude_from_search' => false
				);
	register_post_type('facts', $args);
}
// Activation
add_action('init', 'custom_post_facts');






// Create widget ABOUT US
class WidgetOutAboutUs extends WP_Widget
{
    public function __construct() {
        parent::__construct("OutAboutUs", "Out About Us",
            array("description" => "Out About Us (widget theme 'Trendy')"));
    }

    public function form($instance) {
		$title = isset($instance['title']) ? $instance['title'] : 'ABOUT US';
		$subtitle = isset($instance['subtitle']) ? $instance['subtitle'] : 'Duis vitae velit mollis, congue nisi dignissim, pellentesque lorem';
		?>
		<p>
			<label for="<?= $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title'); ?>" value="<?= $title; ?>" class="widefat">
		</p>
		<p>
			<label for="<?= $this->get_field_id('subtitle'); ?>">Subtitle</label>
			<input type="text" name="<?= $this->get_field_name('subtitle'); ?>" id="<?= $this->get_field_id('subtitle'); ?>" value="<?= $subtitle; ?>" class="widefat">
		</p>
		<?php
	}

/*	public function update($newInstance, $oldInstance) {
	}
*/
	public function widget($args, $instance) {
		global $wpdb;
		global $post;
		$str = "SELECT * FROM $wpdb->posts WHERE post_type = 'events' AND post_status = 'publish' ORDER BY post_date LIMIT 3 ";
		echo '<!--============================== section-about ==================================-->';
		echo '<section id="section-about" class="container">';
		echo '	<h1>'.$instance['title'].'</h1>';
		echo '	<h4>'.$instance['subtitle'].'</h4>';
		echo '		<div class="row block-section-about">';

		$result = $wpdb->get_results($str);
		foreach($result as $post){
			setup_postdata($post);
			echo '<div class="wraper-block-cell" id="block-event-'.get_the_id().'">';
			echo '	<div class="block-cell">';
			echo '		<img src="'.get_the_post_thumbnail_url().'">';
			echo '			<div>';
			echo '				<h3>'.get_the_title().'</h3>';
			echo '				<p>'.get_the_content().'</p>';
			echo '			</div>';
			echo '	</div>';
			echo '	<div class="block-cell-year">'.get_the_date('Y').'</div>';
			echo '</div>';
		}
		wp_reset_postdata();

		echo '		<div class="clearfix"></div>';
		echo '		<div class="text-center"><a class="btn" href="" id="load_event">Load more</a></div>';
        echo '	</div>';
     	echo '</section>';
     	echo '<!--============================== END section-about ==================================-->';
	}
}
// Activation
add_action("widgets_init", function () {
    register_widget("WidgetOutAboutUs");
});



// Create widget Divider
class WidgetOutDivider extends WP_Widget
{
    public function __construct() {
        parent::__construct("OutDivider", "Out Divider",
            array("description" => "Out Divider (widget theme 'Trendy')"));
    }

    public function form($instance) {
	}

/*	public function update($newInstance, $oldInstance) {
	}
*/
	public function widget($args, $instance) {
		echo '<div class="container">';
		echo '	<div class="separ-section"></div>';
		echo '</div>';
	}
}
// Activation
add_action("widgets_init", function () {
    register_widget("WidgetOutDivider");
});


// Create widget THE TEAM
class WidgetOutTeam extends WP_Widget
{
    public function __construct() {
        parent::__construct("OutTeam", "Out Team",
            array("description" => "Out Team (widget theme 'Trendy')"));
    }

    public function form($instance) {
		$title = isset($instance['title']) ? $instance['title'] : 'Team';
		$subtitle = isset($instance['subtitle']) ? $instance['subtitle'] : 'Duis vitae velit mollis, congue nisi dignissim, pellentesque lorem';
		?>
		<p>
			<label for="<?= $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title'); ?>" value="<?= $title; ?>" class="widefat">
		</p>
		<p>
			<label for="<?= $this->get_field_id('subtitle'); ?>">Subtitle</label>
			<input type="text" name="<?= $this->get_field_name('subtitle'); ?>" id="<?= $this->get_field_id('subtitle'); ?>" value="<?= $subtitle; ?>" class="widefat">
		</p>
		<?php
	}

/*	public function update($newInstance, $oldInstance) {
	}
*/
	public function widget($args, $instance) {
		global $wpdb;
		global $post;
		$str = "SELECT * FROM $wpdb->posts WHERE post_type = 'team' AND post_status = 'publish' ORDER BY rand() LIMIT 4 ";
		echo '<!--============================== section-team ==================================-->';
		echo '<section id="section-team" class="container">';
		echo '	<h1>'.$instance['title'].'</h1>';
		echo '	<h4>'.$instance['subtitle'].'</h4>';
		echo '		<div class="row team">';
		echo '			<div class="col-md-8 col-md-offset-2">';
		echo '				<div class="row">';

		$result = $wpdb->get_results($str);
		foreach($result as $post){
			setup_postdata($post);
			echo '<div class="col-md-3 col-sm-3 col-xs-6 cell-employee">';
            echo '  <img src="'.get_the_post_thumbnail_url().'" alt="">';
            echo '  <p><span>'.carbon_get_the_post_meta('name_employee').'</span> / '.carbon_get_the_post_meta('spec_employee').'</p>';
            echo '  <div class="employee-socail">';
            if (carbon_get_the_post_meta('facebook_employee') !='') {
            	echo '    <a href="'.carbon_get_the_post_meta('facebook_employee').'"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
            }
            if (carbon_get_the_post_meta('twitter_employee') !='') {
            	echo '    <a href="'.carbon_get_the_post_meta('twitter_employee').'"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
            }
            if (carbon_get_the_post_meta('google-plus_employee') !='') {
            	echo '    <a href="'.carbon_get_the_post_meta('google-plus_employee').'"><i class="fa fa-google-plus" aria-hidden="true"></i></a>';
            }
            if (carbon_get_the_post_meta('linkedin_employee') !='') {
            	echo '    <a href="'.carbon_get_the_post_meta('linkedin_employee').'"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
            }
            if (carbon_get_the_post_meta('pinterest_employee') !='') {
            	echo '    <a href="'.carbon_get_the_post_meta('pinterest_employee').'"><i class="fa fa-pinterest" aria-hidden="true"></i></a>';
            }
            echo '  </div>';
            echo '</div>';	
		}
		wp_reset_postdata();

		echo '				</div>';
		echo '		 	</div>';
        echo '		</div>';
     	echo '</section>';
     	echo '<!--=========================== END section-team ==================================-->';
	}
}
// Activation
add_action("widgets_init", function () {
    register_widget("WidgetOutTeam");
});




// Create widget WORKS
class WidgetOutWorks extends WP_Widget
{
    public function __construct() {
        parent::__construct("OutWorks", "Out Works",
            array("description" => "Out Works (widget theme 'Trendy')"));
    }

    public function form($instance) {
		$title = isset($instance['title']) ? $instance['title'] : 'Works';
		$subtitle = isset($instance['subtitle']) ? $instance['subtitle'] : 'Duis vitae velit mollis, congue nisi dignissim, pellentesque lorem';
		?>
		<p>
			<label for="<?= $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title'); ?>" value="<?= $title; ?>" class="widefat">
		</p>
		<p>
			<label for="<?= $this->get_field_id('subtitle'); ?>">Subtitle</label>
			<input type="text" name="<?= $this->get_field_name('subtitle'); ?>" id="<?= $this->get_field_id('subtitle'); ?>" value="<?= $subtitle; ?>" class="widefat">
		</p>
		<?php
	}

/*	public function update($newInstance, $oldInstance) {
	}
*/
	public function widget($args, $instance) {
		global $wpdb;
		global $post;
		$str = "SELECT * FROM $wpdb->posts WHERE post_type = 'work' AND post_status = 'publish' ORDER BY  post_date ";
		echo '<!--=========================== section-works ==================================-->';
		echo '<section id="section-works" class="container-fluid">';
		echo '	<div class="container"> ';
		echo '		<h1>'.$instance['title'].'</h1>';
		echo '		<h4>'.$instance['subtitle'].'</h4>';
		echo '		<div id="owl-works" class="owl-carousel owl-theme">';

		$result = $wpdb->get_results($str);
		foreach($result as $post){
			setup_postdata($post);
			echo '<div class="item cell-works">';
			echo '	<a href="'.get_permalink().'">';
			echo '		<img src="'.get_the_post_thumbnail_url().'" alt="">';
			echo '		<h3>'.get_the_title().'</h3>';
			echo '		<div class="hr-cell-works"></div>';
			echo '		<p>'.carbon_get_the_post_meta('project_info_category').'</p>';
			echo '	</a>';
			echo '</div>';
		}
		wp_reset_postdata();
		echo '		</div>';
        echo '	</div>';
     	echo '</section>';
     	echo '<!--=========================== END section-works ==================================-->';
	}
}
// Activation
add_action("widgets_init", function () {
    register_widget("WidgetOutWorks");
});


// Create widget Out Services
class WidgetOutServices extends WP_Widget
{
    public function __construct() {
        parent::__construct("OutServices", "Out Services",
            array("description" => "Out Services (widget theme 'Trendy')"));
    }

    public function form($instance) {
		$title = isset($instance['title']) ? $instance['title'] : 'SERVICES';
		$subtitle = isset($instance['subtitle']) ? $instance['subtitle'] : 'Duis vitae velit mollis, congue nisi dignissim, pellentesque lorem';
		?>
		<p>
			<label for="<?= $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title'); ?>" value="<?= $title; ?>" class="widefat">
		</p>
		<p>
			<label for="<?= $this->get_field_id('subtitle'); ?>">Subtitle</label>
			<input type="text" name="<?= $this->get_field_name('subtitle'); ?>" id="<?= $this->get_field_id('subtitle'); ?>" value="<?= $subtitle; ?>" class="widefat">
		</p>
		<?php
	}

/*	public function update($newInstance, $oldInstance) {
	}
*/
	public function widget($args, $instance) {
		global $wpdb;
		global $post;
		$str = "SELECT * FROM $wpdb->posts WHERE post_type = 'services' AND post_status = 'publish'  ";
		echo '<!--=========================== section-services ==================================-->';
		echo ' <section id="section-services" class="container">';
		echo '	<h1>'.$instance['title'].'</h1>';
		echo '	<h4>'.$instance['subtitle'].'</h4>';

		echo '	<div class="row">';

		$result = $wpdb->get_results($str);
		foreach($result as $post){
			setup_postdata($post);
			echo '<div class="col-md-4 col-sm-4 cell-service">';
			echo '	<img src="'.get_the_post_thumbnail_url().'">';
			echo '	<h3>'.get_the_title().'</h3>';
			echo '	<p>'.get_the_content().'</p>';
			echo '</div>';
		}
		wp_reset_postdata();
		echo '	</div>';
     	echo '</section>';
     	echo '<!--========================= END section-services ==================================-->';
	}
}
// Activation
add_action("widgets_init", function () {
    register_widget("WidgetOutServices");
});



// Create widget Out Services
class WidgetOutPrices extends WP_Widget
{
    public function __construct() {
        parent::__construct("OutPrices", "Out Prices",
            array("description" => "Out Prices (widget theme 'Trendy')"));
    }

    public function form($instance) {
		$title = isset($instance['title']) ? $instance['title'] : 'Prices';
		$subtitle = isset($instance['subtitle']) ? $instance['subtitle'] : 'Duis vitae velit mollis, congue nisi dignissim, pellentesque lorem';
		?>
		<p>
			<label for="<?= $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title'); ?>" value="<?= $title; ?>" class="widefat">
		</p>
		<p>
			<label for="<?= $this->get_field_id('subtitle'); ?>">Subtitle</label>
			<input type="text" name="<?= $this->get_field_name('subtitle'); ?>" id="<?= $this->get_field_id('subtitle'); ?>" value="<?= $subtitle; ?>" class="widefat">
		</p>
		<?php
	}

/*	public function update($newInstance, $oldInstance) {
	}
*/
	public function widget($args, $instance) {
		global $wpdb;
		global $post;
		$str = "SELECT * FROM $wpdb->posts WHERE post_type = 'prices' AND post_status = 'publish'  order by ID limit 4 ";
		echo '<!--=========================== section-prices ==================================-->';
		echo ' <section id="section-prices" class="container">';
		echo '	<h1>'.$instance['title'].'</h1>';
		echo '	<h4>'.$instance['subtitle'].'</h4>';

		echo '	<div class="row">';

		$result = $wpdb->get_results($str);
		foreach($result as $post){
			setup_postdata($post);
	        echo '<div class="col-md-3 col-sm-6 col-xs-6">';
	        if (carbon_get_the_post_meta('price_hight') == 'yes') {
	        	echo '  <div class="cell-price cell-price-main">';	
	        } else {
		        echo '  <div class="cell-price">';
	        };
	        echo '    <h3>'.get_the_title().'</h3>';
	        echo '    <p class="price1">'.carbon_get_the_post_meta('price_price').'</p>';
	        echo '    <p class="price2">'.carbon_get_the_post_meta('price_term').'</p>';
	        echo '    <div class="hr-cell-price"></div>';
	        $suggestions = carbon_get_post_meta(get_the_id(), 'suggestions', 'complex' );
			foreach ($suggestions as $value) {
		        echo '    <p class="text-cell-price">'.$value['price_suggestion'].'</p>';
			}
	        echo '    <a href="'.carbon_get_the_post_meta('price_link').'" class="btn">GRAB NOW</a>';
	        echo '  </div>';
	        echo '</div>';
		}
		wp_reset_postdata();
		echo '	</div>';
		echo '<div clearfix></div>';
     	echo '</section>';
     	echo '<!--=========================== END section-prices ==================================-->';
	}
}
// Activation
add_action("widgets_init", function () {
    register_widget("WidgetOutPrices");
});



// Create widget Parallax
class WidgetOutParallax extends WP_Widget
{
    public function __construct() {
        parent::__construct("OutParallax", "Out block parallax",
            array("description" => "Out block parallax (widget theme 'Trendy')"));
    }

    public function form($instance) {
		$title_up = isset($instance['title_up']) ? $instance['title_up'] : 'CATCHY SENTANCE';
		$title_down = isset($instance['title_down']) ? $instance['title_down'] : 'WITH VIDEO BACKGROUND';
		$url_pic = isset($instance['url_pic']) ? $instance['url_pic'] : '';
		?>
		<p>
			<label for="<?= $this->get_field_id('title_up'); ?>">Title up</label>
			<input type="text" name="<?= $this->get_field_name('title_up'); ?>" id="<?= $this->get_field_id('title_up'); ?>" value="<?= $title_up; ?>" class="widefat">
		</p>
		<p>
			<label for="<?= $this->get_field_id('title_down'); ?>">Title down</label>
			<input type="text" name="<?= $this->get_field_name('title_down'); ?>" id="<?= $this->get_field_id('title_down'); ?>" value="<?= $title_down; ?>" class="widefat">
		</p>
		<p>
			<label for="<?= $this->get_field_id('url_pic'); ?>">Url image</label>
			<input type="text" name="<?= $this->get_field_name('url_pic'); ?>" id="<?= $this->get_field_id('url_pic'); ?>" value="<?= $url_pic; ?>" class="widefat">
		</p>

		<?php	
	}

/*	public function update($newInstance, $oldInstance) {
	}
*/
	public function widget($args, $instance) {
		echo '<!--========================= section-parallax =================================-->';
		echo '    <section id="section-parallax" class="container-fluid parallax-window" data-parallax="scroll" data-image-src="'.$instance['url_pic'].'">';
		echo '      <div class="container">';
		echo '		<h2>'.$instance['title_up'].'</h2>';
		echo '		<div class="hr-section-parallax"></div>';
		echo '		<h2>'.$instance['title_down'].'</h2>';
		echo '      </div>';
		echo '    </section>';
		echo '<!--====================== END section-parallax =================================-->';
	}
}
// Activation
add_action("widgets_init", function () {
    register_widget("WidgetOutParallax");
});

 

// Create widget Out Testimonials
class WidgetOutTestimonials extends WP_Widget
{
    public function __construct() {
        parent::__construct("WidgetOutTestimonials", "Out Testimonials",
            array("description" => "Out Testimonials (widget theme 'Trendy')"));
    }

    public function form($instance) {
		$title = isset($instance['title']) ? $instance['title'] : 'TESTIMONIALS';
		$subtitle = isset($instance['subtitle']) ? $instance['subtitle'] : 'Duis vitae velit mollis, congue nisi dignissim, pellentesque lorem';
		?>
		<p>
			<label for="<?= $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title'); ?>" value="<?= $title; ?>" class="widefat">
		</p>
		<p>
			<label for="<?= $this->get_field_id('subtitle'); ?>">Subtitle</label>
			<input type="text" name="<?= $this->get_field_name('subtitle'); ?>" id="<?= $this->get_field_id('subtitle'); ?>" value="<?= $subtitle; ?>" class="widefat">
		</p>
		<?php
	}

/*	public function update($newInstance, $oldInstance) {
	}
*/
	public function widget($args, $instance) {
		global $wpdb;
		global $post;
		$str = "SELECT * FROM $wpdb->posts WHERE post_type = 'testimonials' AND post_status = 'publish'  order by RAND() limit 3 ";
		echo '<!--=========================== section-testimonials ================================-->';
		echo ' <section id="section-testimonials" class="container">';
		echo '	<h1>'.$instance['title'].'</h1>';
		echo '	<h4>'.$instance['subtitle'].'</h4>';

		echo '	<div id="owl-testimonials" class="owl-carousel owl-theme">';

		$result = $wpdb->get_results($str);
		foreach($result as $post){
			setup_postdata($post);
		    echo '<div class="item">';
	        echo '  <img src="'.get_the_post_thumbnail_url().'">';
	        echo '  <p class="text-testimonial">“'.get_the_content().'”</p>';
	        echo '  <p class="author-testimonial">— <span>'.carbon_get_the_post_meta('testimonial_author_name').'</span>  / '.carbon_get_the_post_meta('testimonial_author_prof').'</p>';
	        echo '</div>';
		}
		wp_reset_postdata();
		echo '	</div>';
     	echo '</section>';
     	echo '<!--=======================  END section-testimonials ===============================-->';
	}
}
// Activation
add_action("widgets_init", function () {
    register_widget("WidgetOutTestimonials");
});



// Create widget Out Clients
class WidgetOutClients extends WP_Widget
{
    public function __construct() {
        parent::__construct("WidgetOutClients", "Out Clients",
            array("description" => "Out Clients (widget theme 'Trendy')"));
    }

    public function form($instance) {
		$title = isset($instance['title']) ? $instance['title'] : 'CLIENTS';
		$subtitle = isset($instance['subtitle']) ? $instance['subtitle'] : 'Duis vitae velit mollis, congue nisi dignissim, pellentesque lorem';
		?>
		<p>
			<label for="<?= $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title'); ?>" value="<?= $title; ?>" class="widefat">
		</p>
		<p>
			<label for="<?= $this->get_field_id('subtitle'); ?>">Subtitle</label>
			<input type="text" name="<?= $this->get_field_name('subtitle'); ?>" id="<?= $this->get_field_id('subtitle'); ?>" value="<?= $subtitle; ?>" class="widefat">
		</p>
		<?php
	}

/*	public function update($newInstance, $oldInstance) {
	}
*/
	public function widget($args, $instance) {
		global $wpdb;
		global $post;
		$str = "SELECT * FROM $wpdb->posts WHERE post_type = 'clients' AND post_status = 'publish'  order by RAND() limit 6 ";
		echo '<!--=======================  section-clients ==================================-->';
		echo ' <section id="section-clients" class="container">';
		echo '	<h1>'.$instance['title'].'</h1>';
		echo '	<h4>'.$instance['subtitle'].'</h4>';

		echo '	<div class="row">';

		$result = $wpdb->get_results($str);
		foreach($result as $post){
			setup_postdata($post);
	        echo '<div class="col-md-2 col-sm-4 col-xs-6 cell-client">';
	        echo '  <img src="'.get_the_post_thumbnail_url().'" alt="">';
	        echo '</div>';
		}
		wp_reset_postdata();
		echo '	</div>';
     	echo '</section>';
     	echo '<!--=======================  END section-clients ==================================-->';
	}
}
// Activation
add_action("widgets_init", function () {
    register_widget("WidgetOutClients");
});



// Create widget Out Facts
class WidgetOutFacts extends WP_Widget
{
    public function __construct() {
        parent::__construct("WidgetOutFacts", "Out Facts",
            array("description" => "Out Facts (widget theme 'Trendy')"));
    }

    public function form($instance) {
		$title = isset($instance['title']) ? $instance['title'] : 'SOME COOL FACTS';
		$subtitle = isset($instance['subtitle']) ? $instance['subtitle'] : 'Duis vitae velit mollis, congue nisi dignissim, pellentesque lorem';
		?>
		<p>
			<label for="<?= $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title'); ?>" value="<?= $title; ?>" class="widefat">
		</p>
		<p>
			<label for="<?= $this->get_field_id('subtitle'); ?>">Subtitle</label>
			<input type="text" name="<?= $this->get_field_name('subtitle'); ?>" id="<?= $this->get_field_id('subtitle'); ?>" value="<?= $subtitle; ?>" class="widefat">
		</p>
		<p>
			<label for="<?= $this->get_field_id('url_pic'); ?>">Url image background</label>
			<input type="text" name="<?= $this->get_field_name('url_pic'); ?>" id="<?= $this->get_field_id('url_pic'); ?>" value="<?= $url_pic; ?>" class="widefat">
		</p>
		<?php
	}

/*	public function update($newInstance, $oldInstance) {
	}
*/
	public function widget($args, $instance) {
		global $wpdb;
		global $post;
		$str = "SELECT * FROM $wpdb->posts WHERE post_type = 'facts' AND post_status = 'publish'  order by id limit 4 ";
		echo '<!--=======================  section-facts ==================================-->';
		echo '	<section id="section-facts" class="container-fluid" style="background: url('.$instance['url_pic'].') center center no-repeat;">';
		echo '		<div class="container">';
		echo '			<h1>'.$instance['title'].'</h1>';
		echo '			<h4>'.$instance['subtitle'].'</h4>';
		echo '			<div class="row">';

		$result = $wpdb->get_results($str);
		foreach($result as $post){
			setup_postdata($post);
            echo '<div class="col-md-3 col-sm-6 cell-fact">';
            echo '	<div class="cell-fact-img">';
            echo '	  <img src="'.get_the_post_thumbnail_url().'" alt="">';           
            echo '	</div>';
            echo '	<div class="cell-fact-inf">';
            echo '	  <span>'.carbon_get_the_post_meta('facts_value').'</span>';
            echo '	  <p>'.get_the_title().'</p>';
            echo '	</div>';
         	echo '</div>';
		}
		wp_reset_postdata();
		echo '			</div>';
		echo '		</div>';
     	echo '</section>';
     	echo '<!--=====================  END section-facts ==================================-->';
	}
}
// Activation
add_action("widgets_init", function () {
    register_widget("WidgetOutFacts");
});


//=========================== Popular posts =====================
// Create widget Popular posts
class PopularPosts extends WP_Widget
{
    public function __construct() {
        parent::__construct("PopularPosts", "Popular Posts",
            array("description" => "Popular Posts (widget theme 'Trendy')"));
    }

    public function form($instance) {
		$title = isset($instance['title']) ? $instance['title'] : 'Popular posts';
		$count_posts = isset($instance['count_posts']) ? $instance['count_posts'] : '3';
		?>
		<p>
			<label for="<?= $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title'); ?>" value="<?= $title; ?>" class="widefat">
		</p>
		<p>
			<label for="<?= $this->get_field_id('count_posts'); ?>">Count posts</label>
			<input type="text" name="<?= $this->get_field_name('count_posts'); ?>" id="<?= $this->get_field_id('count_posts'); ?>" value="<?= $count_posts; ?>" class="widefat">
		</p>
		<?php
	}

/*	public function update($newInstance, $oldInstance) {
	}
*/
	public function widget($args, $instance) {
		global $wpdb;
		global $post;
		$str = "SELECT * FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish'  order by comment_count DESC limit ".$instance['count_posts'];
		
		echo $args['before_widget'];
		if ( ! empty($instance['title']) ) {
			echo $args['before_title'] . $instance['title'] . $args['after_title'];
		}
			$result = $wpdb->get_results($str);
			foreach($result as $post){
				setup_postdata($post);
			    echo '<div class="popular-post">';
	            echo '  <a href="'.get_the_permalink().'">'.get_the_title().'</a>';
	            echo '  <p>';
	            echo '    <i class="fa fa-eye" aria-hidden="true"></i> <span>'.get_comments_number().'</span>';
	            echo '    <i class="fa fa-user" aria-hidden="true"></i> ';
	            echo the_author_posts_link();  
	            echo '  </p>';
	            echo '</div>';
			}
			wp_reset_postdata();
		echo $args['after_widget'];
	}
}
// Activation
add_action("widgets_init", function () {
    register_widget("PopularPosts");
});
//==================================END Popular posts==============================



//============================ For load Ajax About  ===================================//   
add_action( 'wp_enqueue_scripts', 'myajax', 99 );
function myajax(){
	wp_localize_script('jquery_js_h', 'myajax', 
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);  

}

add_action('wp_ajax_ajax_event', 'select_event');
add_action('wp_ajax_nopriv_ajax_event', 'select_event');

function select_event(){
	$last_ID = $_POST['last_ID'];
	
	global $wpdb;
	global $post;
	$str = "SELECT * FROM $wpdb->posts WHERE post_type = 'events' AND post_status = 'publish' ORDER BY post_date ";

	$flag = false;
	$result = $wpdb->get_results($str);
	foreach($result as $post){
		setup_postdata($post);

		if ($flag) {
			echo '<div class="wraper-block-cell" id="block-event-'.get_the_id().'" style="display:none">';
			echo '	<div class="block-cell">';
			echo '		<img src="'.get_the_post_thumbnail_url().'">';
			echo '			<div>';
			echo '				<h3>'.get_the_title().'</h3>';
			echo '				<p>'.get_the_content().'</p>';
			echo '			</div>';
			echo '	</div>';
			echo '	<div class="block-cell-year">'.get_the_date('Y').'</div>';
			echo '</div>';
			break;
		}

		if (get_the_id() == $last_ID) $flag = true;
	}
	wp_reset_postdata();	
	wp_die();
}


//============================ register widget sidebar  ==============================//
add_action( 'widgets_init', 'register_trendy_widgets' );
function register_trendy_widgets(){
	register_sidebar( array(
		'name'          => 'sidebar',
		'id'            => 'main_sidebar',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div class="col-lg-12 col-md-12 col-sm-6 block-sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3> <div class="hr-sidebar"></div>',
	) );
}

// Comment
add_filter('comment_form_fields', 'reorder_comment_fields' );
function reorder_comment_fields( $fields ){

	$new_fields = array(); // сюда соберем поля в новом порядке

	$myorder = array('author','email','comment'); // нужный порядок

	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}

	// если остались еще какие-то поля добавим их в конец
	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;

	return $new_fields;
}

// widget for post
function register_widgets_like_post(){
	register_sidebar( array(
		'name' => "Panel in the post for like",
		'id' => 'like-post-sidebar',
		'description' => 'The widget will be displayed in the post',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	) );
}
add_action( 'widgets_init', 'register_widgets_like_post' );


// Define the search limits
function SearchFilter($query) {
	if ($query->is_search) {
		 $query->set('post_type', array('post', 'work'));
	}
	return $query;
}
add_filter('pre_get_posts','SearchFilter');



require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
 
add_action( 'tgmpa_register', 'mytheme_require_plugins' );
  
function mytheme_require_plugins() {
	$plugins = array(
	    array(
	        'name'      => 'Contact Form 7',
	        'slug'      => 'contact-form-7',
	        'required'  => true,
	    ),
	    array(
	        'name'      => 'Page Builder by SiteOrigin',
	        'slug'      => 'siteorigin-panels',
	        'required'  => true,
	    ),
	    array(
	        'name'      => 'Page scroll to id',
	        'slug'      => 'page-scroll-to-id',
	        'required'  => true,
	    ),
	    array(
	        'name'      => 'Social Media and Share Icons (Ultimate Social Media)',
	        'slug'      => 'ultimate-social-media-icons',
	        'required'  => true,
	    ),
	    array(
	        'name'      => 'Swifty Image Widget by WPGens',
	        'slug'      => 'swifty-image-widget',
	        'required'  => true,
	    ),
	);

	$config = array(
	    'id'           => 'trendy-tgmpa', // your unique TGMPA ID
	);

//    $config = array( /* The array to configure TGM Plugin Activation */ );
    tgmpa( $plugins, $config );
}


?>