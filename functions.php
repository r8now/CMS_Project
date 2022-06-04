<?php

//Lägg till meny
add_action('init', 'register_my_menus');

    function register_my_menus() {
        register_nav_menus(
        array(
            'main-nav' => ('Huvudmeny'),
            'footer-nav' => ('Footermeny')
        ));
    }

    //Aktivera utvald bild
    add_theme_support('post-thumbnails');

    //Custom image size
    add_image_size('custom-large', 512, 512, true);
    add_image_size('custom-medium', 256, 256, true);
    add_image_size('custom-small', 128, 128, true);

    //Aktivera header-bild      ---------INTE KLAR!
    $args = array(
        'default-image'          => get_template_directory_uri().'./images/header.jpg',
        'width'                  =>   1024,
        'height'                 => 250,
        'uploads'                => true,
      
    );
    add_theme_support('custom-header', $args);

    //Ta bort kommentarer från wp-admin
add_action('admin_menu', 'remove_menus');

function remove_menus(){
    remove_menu_page('edit-comments.php');
}

/*Activate Widget area */
add_action('widgets_init', 'slide_widget_init');

function slide_widget_init(){
    register_sidebar(array(
        'name' => 'Slide Widget',
        'id' => 'slide-widget',   
    ));}












