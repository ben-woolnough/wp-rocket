<?php

// Add feature image support
add_theme_support('post-thumbnails');

// Register menus
function register_my_menus() {
    register_nav_menus(
        array(
        'header-menu' => __('Header Menu')
        )
    );
}
add_action('init', 'register_my_menus');

// Widget Locations
function init_widgets($id) {
    register_sidebar(array(
        'name' => __('Sidebar', 'rocket'),
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'init_widgets');


// Add Google fonts
function enqueue_google_fonts() {
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Oswald|Roboto', false ); 
}
add_action( 'wp_enqueue_scripts', 'enqueue_google_fonts' );


// Customizer
function theme_customizer_register($wp_customize) {
    $wp_customize->add_section('colours', array(
        'title' => __('Colours', 'rocket'),
        'description' => sprintf(__('Choose custom colours', 'rocket')),
        'priority' => 130
    ));

    $wp_customize->add_setting('background_colour', array(
        'default' => _x('#fff', 'rocket'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
        $wp_customize,
        'background_colour',
        array(
            'label' => __('Background', 'rocket'),
            'section' => 'colours',
            'priority' => 1
        ))
    );

    $wp_customize->add_section('logo', array(
        'title' => __('Logo', 'rocket'),
        'description' => sprintf(__('Select an image for the logo', 'rocket')),
        'priority' => 131
    ));

    $wp_customize->add_setting('logo_image', array(
        'default' => _x('', 'rocket'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('logo_image', array(
        'label' => __('Logo Image', 'rocket'),
        'section' => 'logo',
        'priority' => 1
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'logo_image', array(
        'section' => 'logo',
        'label' => 'Logo Image',
        'mime_type' => 'image'
    )));

}
add_action('customize_register', 'theme_customizer_register');