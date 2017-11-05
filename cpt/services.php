<?php

function create_service_post_type() {
    register_post_type( 'services',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Услуги', 'audent' ),
                'singular_name' => __( 'Услуга', 'audent' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'query_var' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-schedule',
        )
    );
    register_taxonomy(
        'service_categories',
        'services',
        // Taxonomy Options
        array(
            'label' => __('Категории', 'audent'),
            'rewrite' => array('slug' => 'service_categories'),
            'hierarchical' => true,
            'query_var' => true,
            'public' => true,
            'has_archive' => true,
        )
    );
}
add_action( 'init', 'create_service_post_type' );


function get_list_of_services() {

    if($terms = get_terms('service_categories')) {
        $i = 1;
        foreach ($terms as $term) {
            $the_query = new WP_Query(array(
                'post_type' => 'services',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array (
                        'taxonomy' => 'service_categories',
                        'field' => 'term_taxonomy_id',
                        'terms' => $term->term_taxonomy_id,
                    )
                ),
            ));
            $services = [];
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    array_push($services, ['title' => get_the_title(), 'href' => get_permalink()]);

                }
            }
            $item = ['title' => $term->name, 'services' => $services, 'counter' => $i, 'icon' => get_field('aud_icon', $term)];
            Helper::hm_get_template_part('template-parts/job-accordeon-item', ['item' => $item]);
            $services = [];
            wp_reset_query();
            $i++;
        }
    }
}

add_action('get-list-of-services', 'get_list_of_services', 10);