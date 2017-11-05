<?php
function create_team_post_type() {
    register_post_type( 'team',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Команда', 'audent' ),
                'singular_name' => __( 'Участник', 'audent' ),
                'add_new' => __('Добавить в команду', 'audent' ),
                'add_new_item' => __('Добавить участника', 'audent' ),
                'edit_item' => __('Редактироавть команду', 'audent' ),
                'new_item' => __('Добавить в команду', 'audent' ),
                'featured_image' => __('Фото', 'audent' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'query_var' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-id',
        )
    );
}
add_action( 'init', 'create_team_post_type' );

function show_team_on_homepage() {
    $the_query = new WP_Query(array(
        'post_type' => 'team',
        'posts_per_page' => 2,
    ));
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            get_template_part('template-parts/team-item-homepage');
        }
    }
}

add_action('show-team-on-homepage', 'show_team_on_homepage', 10);
