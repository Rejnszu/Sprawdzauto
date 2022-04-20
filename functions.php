<?php

function kjm_theme_support()
{
    // add_theme_support("title-tag");
    add_theme_support("custom-logo");
}

add_action("after_setup_theme", "kjm_theme_support");

function kjm_register_styles()
{
    $version = wp_get_theme()->get('Version');
    if (is_page(array('galeria',))) {
        wp_enqueue_style('kjm-magnific-popup-style', get_template_directory_uri() . "/magnific-popup/magnific-popup.css", array(), '1.0', 'all');
    }

    wp_enqueue_style('kjm-boostrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css", array(), '1.0', 'all');
    wp_enqueue_style('kjm-bootstrap-style', get_template_directory_uri() . "/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('kjm-fontawsome-style', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css", array(), '1.0', 'all');
    wp_enqueue_style('kjm-aos-style', "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), '1.0', 'all');
    wp_enqueue_style('kjm-style', get_template_directory_uri() . "/style.css", array("kjm-bootstrap-style"), $version, 'all');
}

add_action('wp_enqueue_scripts', 'kjm_register_styles');


function kjm_register_scripts()
{
    wp_enqueue_script('kjm-jq-script', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1', !is_page(array('galeria')));
    if (is_page(array('galeria'))) {
        wp_enqueue_script('kjm-magnific-popup-script',  get_template_directory_uri() . "/magnific-popup/jquery.magnific-popup.min.js", array(), '1.0', false);
    }


    wp_enqueue_script('kjm-jqcColor-script', "https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js", array(), '2.1.2', true);
    wp_enqueue_script('kjm-popper-script', "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), '1.0', true);
    wp_enqueue_script('kjm-bootstrap-script',  get_template_directory_uri() . "/bootstrap.min.js", array(), '1.0', true);
    wp_enqueue_script('kjm-aos-script', "https://unpkg.com/aos@2.3.1/dist/aos.js", array(), '1.0', true);

    wp_enqueue_script('vanilla-tilt', get_template_directory_uri() . "/vanilla-tilt.js", array(), '1.0', true);
    wp_enqueue_script('kjm-main-script', get_template_directory_uri() . "/kjm.js", array(), '1.0', true);
    $translation_array = array('templateUrl' => get_template());
    wp_localize_script('kjm-main-script', 'object_name', $translation_array);
}

add_action('wp_enqueue_scripts', 'kjm_register_scripts');

// function preload_img()
// {
//     printf('<link rel="preload" as="image" href="%s" />',  get_template_directory_uri() . '/assets/road.jpg');
//     printf('<link rel="preload" as="image" href="%s" />',  get_template_directory_uri() . '/assets/pasja_back.jpg');
//     printf('<link rel="preload" as="image" href="%s" />',  get_template_directory_uri() . '/assets/dyplom.jpg');
// }

// add_action('wp_head', 'preload_img');
