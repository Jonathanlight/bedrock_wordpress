<?php
/**
 * Fonctions du thème
 */

// Chargement du walker personnalisé
require_once get_template_directory() . '/includes/class-bootstrap-5-wp-nav-menu-walker.php';

if (!function_exists('titans_bootstrap_setup')) {
    function titans_bootstrap_setup() {
        // Support des traductions
        load_theme_textdomain('titans-bootstrap', get_template_directory() . '/languages');

        // Support du titre automatique
        add_theme_support('title-tag');

        // Support des images à la une
        add_theme_support('post-thumbnails');

        // Support du menu
        register_nav_menus(array(
            'primary' => __('Menu Principal', 'titans-bootstrap'),
            'footer'  => __('Menu Pied de Page', 'titans-bootstrap')
        ));

        // Support HTML5
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ));
    }
}
add_action('after_setup_theme', 'titans_bootstrap_setup');

/**
 * Chargement des scripts et styles
 */
function titans_bootstrap_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.2');

    // Style principal
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.min.css', array('bootstrap-css'), filemtime(get_template_directory() . '/assets/css/style.min.css'));

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.0.2', true);

    // Script principal
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('bootstrap-js'), filemtime(get_template_directory() . '/assets/js/main.js'), true);
}
add_action('wp_enqueue_scripts', 'titans_bootstrap_scripts');

/**
 * Désactivation de l'éditeur Gutenberg
 */
add_filter('use_block_editor_for_post', '__return_false', 10);