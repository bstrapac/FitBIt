<?php
include __DIR__.'/classes/cpt_class.php';
include __DIR__.'/classes/taxonomy_class.php';
include __DIR__.'/classes/cmb_class.php';
include __DIR__.'/methods/methods.php';
include __DIR__.'/shortcode/shortcode.php';
if ( ! function_exists( 'theme_init' ) )
{
    function theme_init()
    {
        register_nav_menus
        (
            array
                (
                    'primary' => 'Main menu'
                )
        );
        add_theme_support('post-thumbnails');
    }
}
add_action( 'widgets_init', 'sidebar_init' );
add_action( 'after_setup_theme', 'theme_init' );
add_action( 'wp_enqueue_scripts', 'init_css' );
add_action( 'wp_enqueue_scripts', 'init_js', 1);
add_action( 'admin_enqueue_scripts', 'init_select2' );
function sidebar_init()
{
    $my_sidebars = array(
        array(
            'name'          => 'Footer side bar',
            'id'            => 'footer_left',
            'description'   => 'Lijevi widget',
            'before_widget' => '<div class="widget-content">',
            'after_widget'  => "</div>",
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ),
        array(
            'name'          => 'Footer side bar',
            'id'            => 'footer_middle',
            'description'   => 'Srednji widget',
            'before_widget' => '<div class="widget-content">',
            'after_widget'  => "</div>",
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ),
        array(
            'name'          => 'Footer side bar',
            'id'            => 'footer_right',
            'description'   => 'Desni widget',
            'before_widget' => '<div class="widget-content">',
            'after_widget'  => "</div>",
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ),
    );
    foreach( $my_sidebars as $sidebar )
    {
        $args = wp_parse_args( $sidebar);
        register_sidebar( $args );
    }
}
function init_css()
{
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.css' );
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style( 'googlefonts1-css', 'https://fonts.googleapis.com/css?family=Quicksand');
    wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/style.css' );
}
function init_js()
{
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/lib/bootstrap/js/bootstrap.js', array('jquery'), true);
    wp_enqueue_script('theme-js', get_template_directory_uri().'/lib/easing/easing.js', array('jquery'), true);
    wp_enqueue_script('plugin-js', get_template_directory_uri().'/js/main.js', array('jquery'), true);
    wp_enqueue_script('core-js', get_template_directory_uri().'/lib/jquery/jquery.js', array('jquery'), true);
    wp_enqueue_script('core-js', get_template_directory_uri().'/lib/easing/easing.min.js', array('jquery'), true);
}
function init_select2()
{
    wp_enqueue_style( 'select2css', get_template_directory_uri() . '/assets/select2/select2.min.css' );
    wp_enqueue_script('select2js', get_template_directory_uri().'/assets/select2/select2.min.js', array('jquery'), true);
    wp_enqueue_script('select2-admin-js', get_template_directory_uri().'/js/init_select2.js', array('jquery'), true);
}
$cpt = new customPostType();
$tax = new customTaxonomies();
$cmb = new customMetaBox();
?>