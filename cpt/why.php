<?php
function create_why_us_post_type() {
    register_post_type( 'why',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Почему мы', 'audent' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'query_var' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-editor-help',
        )
    );
}
add_action( 'init', 'create_why_us_post_type' );


function show_why_us() {
    $the_query = new WP_Query(array(
        'post_type' => 'why',
        'posts_per_page' => 3,
    ));
    if ($the_query->have_posts()) {
        $counter = 3;
        while ($the_query->have_posts()) {
            $the_query->the_post();
            Helper::hm_get_template_part('template-parts/why-us-item', ['sec' => $counter]);
            $counter += 3;
        }

    }
}

add_action('show-why-us', 'show_why_us', 10);