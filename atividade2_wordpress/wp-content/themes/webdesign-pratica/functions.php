<?php
function webdesign_pratica_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    // Opções que aparecem em Aparência > Personalizar
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 60,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('custom-background', [
        'default-color' => 'f4f7fb',
    ]);

    register_nav_menus([
        'primary' => __('Menu principal', 'webdesign-pratica'),
    ]);
}
add_action('after_setup_theme', 'webdesign_pratica_setup');

function webdesign_pratica_assets() {
    wp_enqueue_style(
        'webdesign-pratica-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'webdesign_pratica_assets');
