<?php

function learningWordPress_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

function addbootstrap() {

    wp_enqueue_script( 'mainscript', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', array ( 'jquery' ), 1.1, true);
 
}

add_action('wp_enqueue_scripts', 'addbootstrap');

add_theme_support( 'post-thumbnails' ); 

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));

function create_my_project_post() {
$labels = array(
    'name' => __('Photos-Portrait'),
    'singular_name' => __('Photos post'),
        'add_new'   => __('Add new Photos'),
        'add_new_item' => __( 'Add New Photo'),
        'new_item'     => __( 'New Photo'),
        'edit_item'          => __( 'Edit Photos'),
        'view_item'          => __( 'View Photos'),
        'all_items'          => __( 'All Photos'),
                             );
	$args = array('labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail','custom-fields'));

    register_post_type('photos-portrait',$args);
}

add_action('init', 'create_my_project_post');

function create_images_post() {
    $labels = array(
        'name' => __('Photos-Couples'),
        'singular_name' => __('Photos post'),
        'add_new'   => __('Add new Photos'),
        'add_new_item' => __( 'Add New Photo'),
        'new_item'     => __( 'New Photo'),
        'edit_item'          => __( 'Edit Photos'),
        'view_item'          => __( 'View Photos'),
        'all_items'          => __( 'All Photos'),
                                 );
        $args = array('labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'));
    
        register_post_type('photos-couples',$args);
    }
    
    add_action('init', 'create_images_post');

    function create_images_post_wedding() {
        $labels = array(
            'name' => __('Photos-Wedding'),
            'singular_name' => __('Photos post'),
            'add_new'   => __('Add new Photos'),
            'add_new_item' => __( 'Add New Photo'),
            'new_item'     => __( 'New Photo'),
            'edit_item'          => __( 'Edit Photos'),
            'view_item'          => __( 'View Photos'),
            'all_items'          => __( 'All Photos'),
                                     );
            $args = array('labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail','custom-fields'));
        
            register_post_type('photos-wedding',$args);
        }
        
        add_action('init', 'create_images_post_wedding');

        function learningWordPress_init() {
            register_sidebar(
 array(
     'name'          => __( 'Photography Footer', 'footerdata' ),
     'id'            => 'sidebar-1',
     'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'learningWordPress' ),
     'before_widget' => '<section id="%1$s" class="widget %2$s">',
     'after_widget'  => '</section>',
     'before_title'  => '<h2 class="widget-title">',
     'after_title'   => '</h2>',
 )
);
}
add_action( 'widgets_init', 'learningWordPress_init' );