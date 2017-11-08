<?
function create_certificate_post_type() {
    register_post_type( 'certificate',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Сертификаты', 'audent' ),
                'singular_name' => __( 'Сертификат', 'audent' ),
                'add_new' => __('Добавить сертификат', 'audent' ),
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'certificate'),
            'query_var' => true,
            'supports' => array('title', 'thumbnail'),
            'menu_icon' => 'dashicons-welcome-learn-more',
        )
    );
}
add_action( 'init', 'create_certificate_post_type' );

function show_certificates() {
  $the_query = new WP_Query(array(
      'post_type' => 'certificate',
      'posts_per_page' => -1,
  ));
  if ($the_query->have_posts()) {
      while ($the_query->have_posts()) {
          $the_query->the_post();
          get_template_part('template-parts/certificate-item');
      }
  }
}

add_action('show-certificates', 'show_certificates', 10);
