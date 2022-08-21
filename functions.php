<?php 

if( file_exists( dirname( __FILE__ ) .  '/lib/redux-core/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/lib/redux-core/framework.php' );
}
if( file_exists( dirname( __FILE__ ) .  '/lib/sample/config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/lib/sample/config.php' );
}






// theme setup functions 

add_action('after_setup_theme', 'ounce_functions');
function ounce_functions() {

    // Text Domain 
    load_theme_textdomain('ounce', get_template_directory().'/lang');

    // theme supports 
    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');


    add_theme_support('post-formats', array(
        'video',
        'audio',
        'quote',
        'gallery'
    ));

    register_nav_menu('main-menu', __('Main Menu', 'ounce'));

}


// including the styles 
add_action('wp_enqueue_scripts', 'ounce_styles');

function ounce_styles(){
    //======= VENDOR CSS FILES ======= 
    wp_enqueue_style('animate', get_template_directory_uri().'/assets/vendor/animate.css/animate.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    wp_enqueue_style('boxicons', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css');
    wp_enqueue_style('glightbox', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css');
    wp_enqueue_style('swiper-bundle', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css');
    // ======= TEMPLATE MAIN CSS FILES ======= 
    wp_enqueue_style('template-css', get_template_directory_uri().'/assets/css/style.css');

    wp_enqueue_style('stylesheet', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'ounce_scripts');

function ounce_scripts(){
    wp_enqueue_script('purecounter', get_template_directory_uri().'/assets/vendor/purecounter/purecounter.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap.bundle.min', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery', 'purecounter'), '', true);
    wp_enqueue_script('glightbox', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js', array('jquery', 'purecounter', 'bootstrap.bundle.min'), '', true);
    wp_enqueue_script('isotope', get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('jquery', 'purecounter', 'bootstrap.bundle.min', 'glightbox'), '', true);
    wp_enqueue_script('swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', array('jquery', 'purecounter', 'bootstrap.bundle.min', 'glightbox', 'isotope'), '', true);
    wp_enqueue_script('validate', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js', array('jquery', 'purecounter', 'bootstrap.bundle.min', 'glightbox', 'isotope', 'swiper'), '', true);

    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array('jquery', 'purecounter', 'bootstrap.bundle.min', 'glightbox', 'isotope', 'swiper', 'validate'), '', true);
}


// Register Sidebars
add_action('widgets_init', 'footer_widgets');
function footer_widgets(){
    register_sidebar( array(
    'name' => __('Footer Sidebar 1', 'ounce'),
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="row">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array(
    'name' => __('Footer Sidebar 2', 'ounce'),
    'id' => 'footer-sidebar-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="row">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array(
    'name' => __('Footer Sidebar 3', 'ounce'),
    'id' => 'footer-sidebar-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="row">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array(
    'name' => __('Footer Sidebar 4', 'ounce'),
    'id' => 'footer-sidebar-4',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="row">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
}


