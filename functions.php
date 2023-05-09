<?php

function init_template(){

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'top_menu' => 'Menu Principal'
        )
        );
}

add_action('after_setup_theme','init_template');

function assets() {

    wp_enqueue_style( 'bootstrap' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', '', '5.3.0', 'all');
    wp_enqueue_style( 'montserrat' , 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap','','1.0','all' );
    wp_enqueue_style( 'estilo', get_template_directory_uri() . '/style.css' );
    
    wp_register_script('popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js','','2.11.7',true);
    wp_enqueue_script('booststraps','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js', array('jquery','popper'),'5.3.0',true);
    wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js','','1.0',true);
}

add_action('wp_enqueue_scripts','assets');

function sidebar(){
    register_sidebar(
        array(
            'name'         => 'Pie de página',
            'id'           => 'footer',
            'description'  => 'Zona de Widgets para pie de página',
            'before_title' => '<p>',
            'after_title'  => '</p>',
            'before_widget'=> '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
        )
        );
}

add_action('widgets_init','sidebar');

function productos_type(){
    $labels = array(
        'name'          => 'Productos',
        'singular_name' => 'Producto',
        'menu_name'     => 'Productos',
    );
    $args = array(
        'label'         => 'Productos',
        'description'   => 'Productos de Platzi',
        'labels'        => $labels,
        'supports'      => array('title','editor','thumbnail','revisions'),
        'public'        => true,
        'show_in_menu'  => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-cart',
        'can_export'    => true,
        'publicly_queryable' => true,
        'rewrite'       => true,
        'show_in_rest'  => true,
    );
    register_post_type('producto',$args);
}

add_action('init','productos_type');