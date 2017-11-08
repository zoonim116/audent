<?
function create_gallery_post_type() {
    register_post_type( 'aud_gallery',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Галлерея', 'audent' ),
                'singular_name' => __( 'Галлерея', 'audent' ),
                'add_new' => __('Добавить в галлерею', 'audent' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'gallery'),
            'query_var' => true,
            'supports' => array('title', 'thumbnail'),
            'menu_icon' => 'dashicons-format-gallery',
        )
    );
}
add_action( 'init', 'create_gallery_post_type' );

function show_gallery() {
  $the_query = new WP_Query(array(
      'post_type' => 'aud_gallery',
      'posts_per_page' => -1,
  ));
  if ($the_query->have_posts()) {
      while ($the_query->have_posts()) {
          $the_query->the_post();
          get_template_part('template-parts/gallery-item');
      }
  }
}

add_action('show-gallery', 'show_gallery', 10);
