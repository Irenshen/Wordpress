<?php

// add_filter('show_admin_bar', '__return_false'); 


//scripts
add_action('wp_enqueue_scripts', 'site_scripts');

function site_scripts()
{
    // $version = '6.6.1';
    wp_dequeue_style('wp-block-library');
    wp_deregister_script('wp-embed');

    wp_enqueue_style('font-awesome_style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', []);
    wp_enqueue_style('aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', []);
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css',[]);
    wp_enqueue_style('wp-style', get_stylesheet_uri(), );


    wp_enqueue_script('base-script', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', [], true);
    wp_enqueue_script('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], true);
    wp_enqueue_script('map1-script', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', [], true);

    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', [], true);

    //vars in  js
    wp_localize_script('map-script', 'WPJS', [
        'siteUrl' => get_template_directory_uri(),
    ]);
}

//menu
add_action('after_setup_theme', 'theme_support');
function theme_support()
{
    register_nav_menu('menu_main_header', 'Top menu');
}


//options of site
if (function_exists("acf_add_options_page")) {
    acf_add_options_page(array(
        "page_title" => "General settings",
        "menu_title" => "General settings",
        "menu_slug" => "theme_settings",
    ));
}

//load more pagination
function true_load_posts()
{
    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1; // next page
    $args['post_status'] = 'publish';

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            echo '<div class="facilities-card">';
            echo '<div class="facilities-card__pic-wrap pic-wrap">';
            if (has_post_thumbnail()) {
                echo '<img src="' . get_the_post_thumbnail_url() . '" alt="" title="">';
            }
            echo '</div>';
            echo '<a href="' . get_the_permalink() . '" class="facilities-card__text-wrap">';
            echo '<p>' . get_the_title() . '</p>';
            if (get_field('hospital_name')) {
                echo '<p class="facilities-card__name">' . get_field("hospital_name") . '</p>';
            }
            echo '</a>';
            echo '</div>';
        }
    }

    wp_reset_postdata();
    die();
}


add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');


