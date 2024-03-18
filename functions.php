<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}

function planty_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header','Header');
    register_nav_menu('footer','Footer');
}

    add_action('after_setup_theme', 'planty_supports');
    add_filter('nav_menu_css_class','planty_menu_class');
    add_filter('nav_menu_link_attributes','planty_menu_link_class');

function planty_menu_class($classes)
{
    $classes[]= 'nav-item';
    return $classes;
}

function planty_menu_link_class($attrs)
{
    $attrs['class']= 'nav-link';
    return $attrs;
}   

/*HOOK ADMIN*/

add_filter('wp_nav_menu_objects', 'add_admin_link', 10, 2);

// Fonction pour gérer l'affichage du lien "admin" dans le menu
function add_admin_link($items, $args) {
    // Vérifier si l'utilisateur n'est pas connecté et s'il s'agit de l'emplacement "header" du menu
    if (!is_user_logged_in() && $args->theme_location == "header") {
        // Filtrer les items pour retirer celui avec le titre "Admin"
        $items = array_filter($items, function($item) {
            if ($item->title == 'admin') {
                return false; // Retourne false pour supprimer cet élément
            }
            return true; // Retourne true pour garder les autres éléments
        });
    }

    return $items;
}



