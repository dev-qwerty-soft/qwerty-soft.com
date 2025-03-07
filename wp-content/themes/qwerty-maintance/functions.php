<?php 
function esquis_setup() {
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
register_nav_menus(
    array(
        'menu-1' => esc_html__( 'Primary', 'timeless-beauty-salon' ),
    )
);
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
add_theme_support(
    'custom-background',
    apply_filters(
        'timeless_beauty_salon_custom_background_args',
        array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )
    )
);
add_theme_support( 'customize-selective-refresh-widgets' );
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
add_action( 'after_setup_theme', 'esquis_setup' );




// CSS & JS
function esquis_scripts()
{
    // CSS
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'esquis_scripts');