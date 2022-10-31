<?php
/**
 * JM Custom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JM_Custom
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'jm_custom_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jm_custom_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on JM Custom, use a find and replace
		 * to change 'jm-custom' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jm-custom', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'jm-custom' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'jm-custom' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'jm_custom_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'jm_custom_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jm_custom_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jm_custom_content_width', 640 );
}
add_action( 'after_setup_theme', 'jm_custom_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jm_custom_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jm-custom' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jm-custom' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'jm_custom_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jm_custom_scripts() {

	wp_enqueue_style( 'jm-custom-bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '20151215' );
	wp_enqueue_style( 'jm-custom-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '20151215' );
	wp_enqueue_style( 'jm-custom-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '20151215' );
	wp_enqueue_style( 'jm-custom-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '20151215' );
	wp_enqueue_style( 'jm-custom-fancybox-min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '20151215' );
	wp_enqueue_style( 'jm-custom-simplebar', get_template_directory_uri() . '/assets/css/simplebar.css', array(), '20151215' );

	wp_enqueue_style( 'jm-custom-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_script('jquery');
	wp_style_add_data( 'jm-custom-style', 'rtl', 'replace' );

	
	// wp_enqueue_script( 'jm-custom-pooper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jm-custom-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jm-custom-cookie', get_template_directory_uri() . '/assets/js/jquery.cookie.js', array(), '20151215', true );
	wp_enqueue_script( 'jm-custom-font-awesome', get_template_directory_uri() . '/assets/js/font-awesome.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jm-custom-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jm-custom-fancybox-min', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jm-custom-wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jm-custom-simplebar', get_template_directory_uri() . '/assets/js/simplebar.js', array(), '20151215', true );
	wp_enqueue_script( 'jm-custom-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '20151215', true );
	wp_localize_script( 'jm-custom-custom', 'custom_call', [ 'ajaxurl' => admin_url('admin-ajax.php') ] );


	wp_enqueue_script( 'jm-custom-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jm_custom_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function global_link(){
	global $email , $phone_number , $phone_link,$address,$address_link ,$facebook_link ,$instagram_link ,$twitter_link,$footer_content,$footer_background_image;
	$email = get_field('email','option');
	$phone_number = get_field('phone','option');
	//Phone link
	$val = array("(", ")", " ", "-", ".");
	$replace = array("", "", "", "", "");
	$phone_link = str_replace($val, $replace, $phone_number);	

	$address = get_field('address','option');
	$address_link = get_field('address_link','option');

	$facebook_link = get_field('facebook_link','option');		
	$instagram_link = get_field('instagram_link','option');		
	$twitter_link = get_field('twitter_link','option');		

	$footer_content = get_field('footer_content','option');	
	$footer_background_image = get_field('footer_background_image','option');		

}
add_action('init','global_link');


// Filter the output of logo to fix Googles Error about itemprop logo
add_filter( 'get_custom_logo', 'change_html_custom_logo' );
function change_html_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
	$site_name = get_bloginfo( 'name' );
    $html = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" title="'.$site_name.'" >%2$s</a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'custom-logo',
            ) )
        );
    return $html;   
}

// it's working only menu custom link and link have started with #
function change_menu_URL($items){
	if(!is_front_page()){
		foreach ($items as $key => $item) {
			if ($item->object == 'custom' && substr($item->url, 0, 1) == '#') {
				$item->url = site_url() . $item->url;
			}
		}
	}
	return $items;
}
add_filter('wp_nav_menu_objects', 'change_menu_URL');

function custom_testimonials_post() {
	$labels = array(
		'name' => _x( 'Testimonials', 'post type general name' ),
		'singular_name' => _x( 'Testimonial', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'testimonial' ),
		'add_new_item' => __( 'Add New Testimonials' ),
		'edit_item' => __( 'Edit Testimonial' ),
		'new_item' => __( 'New Testimonial' ),
		'all_items' => __( 'All Testimonials' ),
		'view_item' => __( 'View Testimonial' ),
		'search_items' => __( 'Search Testimonials' ),
		'not_found' => __( 'No testimonial found' ),
		'not_found_in_trash' => __( 'No testimonial found in the Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Testimonials'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds testimonials and testimonial specific data',
		'public' => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive' => true,
		'menu_icon' => 'dashicons-editor-quote',
	);
	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'custom_testimonials_post' );

add_action('wp_ajax_gallery_tabbing','gallery_image_tabbing');
add_action( 'wp_ajax_nopriv_gallery_tabbing', 'gallery_image_tabbing' );
function gallery_image_tabbing() {	
	$active_slug =  $_POST['slug'];
	if(have_rows('service_gallery',5)){
		while(have_rows('service_gallery',5)){ the_row();
			$data_slug = strtolower(str_replace(" ","-", get_sub_field('service_name')));
			if($data_slug == $active_slug){
				$gallery_counter=1;
				$gallery = get_sub_field('gallery_images');
				foreach ($gallery as $key => $image) {
					?>
					<a title="<?php echo get_sub_field('service_name').' '.$gallery_counter; ?>" href="<?php echo $image['url']; ?>" data-fancybox="<?php echo $active_slug; ?>">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo get_sub_field('service_name').' '.$gallery_counter; ?>">
					</a>
					<?php
					$gallery_counter++;
				}
			}
		}
	}
	die;
}



// add_action('wpcf7_before_send_mail', 'westwinds_dynamic_addcc');

// function westwinds_dynamic_addcc($WPCF7_ContactForm)
// {


// 	if (17 == $WPCF7_ContactForm->id() || 150 == $WPCF7_ContactForm->id()) {

// 		$currentformInstance  = WPCF7_ContactForm::get_current();
// 		$contactformsubmition = WPCF7_Submission::get_instance();

// 		if ($contactformsubmition) {


// 			$mail = $currentformInstance->prop('mail');
// 			if (isset($_POST['service-interested']) && !empty($_POST['service-interested'])) {
// 				if($_POST['service-interested'] == "Spiral Staircases"){
// 					$to_email = "jmcustomironworks@gmail.com";
// 					$data = $contactformsubmition->get_posted_data();
// 					if (empty($data))
// 						return;
						
// 					if (!empty($to_email)) {
// 						$mail['recipient'] = $to_email;
// 					}

// 					// Save the email body
// 					$currentformInstance->set_properties(array(
// 						"mail" => $mail
// 					));
// 				}
// 			}
			
// 			/* -------------- */

// 			// saparate all emails by comma.
// 			//$cclist = implode(', ', $cc_email);

			

// 			// return current cf7 instance
// 			return $currentformInstance;
// 		}
// 	}
// }