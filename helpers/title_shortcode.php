<?
function title_init_shortcodegenerator() {
  $title_template =  array(
	'Основные' => array(
		'elements' => array(
			'column' => array(
				'title'   => __('Настройка заголовка', 'audent'),
				'code'    => '[customize_title][/customize_title]',
				'attributes' => array(
					array(
            'name'  => 'custom_title',
            'label' => __('Заголовок', 'audent'),
            'type'  => 'textbox'
					),
				),
			),
		),
	),
);

  $title_sg = array(
  	'name'           => 'title_sg',
  	'template'       => $title_template,
  	'modal_title'    => __( 'Заголовок', 'audent'),
  	'button_title'   => __( 'Добавить заголовок', 'audent'),
  	'types'          => array( 'post', 'page', 'services' ),
  	// 'main_image'     => get_template_directory_uri() . '/public/img/vp_shortcode_icon.png',
  	// 'sprite_image'   => get_template_directory_uri() . '/public/img/vp_shortcode_icon_sprite.png',
  );

  $sg1 = new FavPress_ShortcodeGenerator($title_sg);
}


add_action( 'after_setup_theme', 'title_init_shortcodegenerator' );

function foobar_func( $atts ){
  return '<p class="title-block">' . $atts['custom_title'] . '</p>';
}
add_shortcode( 'customize_title', 'foobar_func' );
