<?php


// theme support
function emarket_theme_support(){
add_theme_support('title-tag'); 
add_theme_support('post-thumbnails');
    add_theme_support('custom-logo'); 
}     
add_action('after_setup_theme', 'emarket_theme_support');

// styles 
function emarket_style(){
wp_enqueue_style('emarket-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0', 'all'); 
wp_enqueue_style('emarket-animate', get_template_directory_uri().'/assets/css/animate.min.css', array(), '1.0', 'all'); 
wp_enqueue_style('emarket-meanmenu', get_template_directory_uri().'/assets/css/meanmenu.min.css', array(), '1.0', 'all'); 
wp_enqueue_style('emarket-popup', get_template_directory_uri().'/assets/css/magnific-popup.min.css', array(), '1.0', 'all'); 
wp_enqueue_style('emarket-odometer', get_template_directory_uri().'/assets/css/odometer.min.css', array(), '1.0', 'all'); 
wp_enqueue_style('emarket-showMoreItems', get_template_directory_uri().'/assets/css/showMoreItems-theme.min.css', array(), '1.0', 'all'); 
wp_enqueue_style('emarket-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0', 'all'); 
wp_enqueue_style('emarket-default', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), '1.0', 'all'); 
wp_enqueue_style('emarket-remixicon', get_template_directory_uri().'/assets/css/remixicon.css', array(), '1.0', 'all'); 
wp_enqueue_style('emarket-style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', 'all'); 
wp_enqueue_style('emarket-responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0', 'all'); 
wp_enqueue_style('emarket-custom', get_template_directory_uri().'/style.css', array(), 1.0, 'all');
}
add_action('wp_enqueue_scripts', 'emarket_style');

// scripts 
function emarket_scripts(){
    wp_enqueue_script('emarket-jquery', get_template_directory_uri().'/assets/js/jquery.min.js', array(), '1.0', true);
    wp_enqueue_script('emarket-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('emarket-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', '1.0', array(), true);
    wp_enqueue_script('emarket-appear', get_template_directory_uri().'/assets/js/appear.min.js', array(), '1.0', true);
    wp_enqueue_script('emarket-odometer', get_template_directory_uri().'/assets/js/odometer.min.js', array(), '1.0', true);
    wp_enqueue_script('emarket-popup', get_template_directory_uri().'/assets/js/magnific-popup.min.js', array(), '1.0', true);
    wp_enqueue_script('emarket-mixitup', get_template_directory_uri().'/assets/js/mixitup.min.js', array(), '1.0', true);
    wp_enqueue_script('emarket-meanmenu', get_template_directory_uri().'/assets/js/meanmenu.min.js', array(), '1.0', true);
    wp_enqueue_script('emarket-showMoreItems', get_template_directory_uri().'/assets/js/showMoreItems.min.js', array(), '1.0', true);
    wp_enqueue_script('emarket-wow', get_template_directory_uri().'/assets/js/wow.min.js', array(), '1.0', true);
    // wp_enqueue_script('emarket-validator', get_template_directory_uri().'/assets/js/form-validator.min.js', array(), '1.0', true);
    // wp_enqueue_script('emarket-contact', get_template_directory_uri().'/assets/js/contact-form-script.js', array(), '1.0', true);
    wp_enqueue_script('emarket-ajaxchimp', get_template_directory_uri().'/assets/js/ajaxchimp.min.js', array(), '1.0', true);
    //  wp_enqueue_script('emarket-jqueryajax','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '1.0', true);
    wp_enqueue_script('emarket-main', get_template_directory_uri().'/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'emarket_scripts');



// //menu
// function emarket_menus(){
//     $locations = array(
//         'primary' => "desktop primary menu",
//         'footer' => "footer menu items",
//     );
//     register_nav_menus($locations);
// }
// add_action('init', 'emarket_menus');



//custom menu
function custom_function()
    {
	register_post_type('products',
		array(
		'labels'      => array(
		'name'          => __('products', 'textdomain'),
		'singular_name' => __('products', 'textdomain'),
		),
		'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
		'public'      => true,
		'has_archive' => true,
		)
		);
		      }
        add_action('init','custom_function');
?>