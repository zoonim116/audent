<?
require_once  get_template_directory() . '/helpers/helper.php';
require_once  get_template_directory() . '/cpt/services.php';
require_once  get_template_directory() . '/cpt/team.php';
require_once  get_template_directory() . '/cpt/why.php';
require_once  get_template_directory() . '/cpt/certificates.php';
require_once  get_template_directory() . '/cpt/gallery.php';
require_once ABSPATH  . 'wp-content/plugins/favpress/favpress-framework/bootstrap.php';
require_once get_template_directory() . '/helpers/title_shortcode.php';

if ( ! file_exists( get_template_directory() . '/helpers/wp-bootstrap-navwalker.php' ) ) {
    return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    require_once get_template_directory() . '/helpers/wp-bootstrap-navwalker.php';
}

/************************ Setup theme **********************************************/
add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup(){
    $res = load_theme_textdomain('audent');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'gallery', 'caption', 'search-form' ));
}

/************************ Register scripts and styles *****************************/
function wpdocs_theme_name_scripts() {
    wp_dequeue_script( 'jquery' );
    // wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery-latest', 'https://code.jquery.com/jquery-latest.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'moment', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment-with-locales.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.6', true );
    wp_enqueue_script( 'bootstrap-datepicker', get_template_directory_uri() . '/js/bootstrap-datepicker.min.js', array(), '1.0.6', true );
    wp_enqueue_script( 'magnificPopupJs', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '1.0.6', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.7', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'flexslider',  'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.4/jquery.flexslider-min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
    wp_register_script( 'loadmore', get_template_directory_uri() . '/js/loadmore.js', array(), '1.0.0', true );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style( 'magnificPopupCss', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style( 'datepicker3', get_template_directory_uri() . '/css/bootstrap-datepicker3.min.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'override_style', get_template_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

/************************ Register menus ****************************************/
function register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Хидер меню', 'audent' ),
            'footer-menu' => __( 'Футер меню', 'audent' ),
        )
    );
}
add_action( 'init', 'register_menus' );

$options = include  get_template_directory() .'/helpers/options.php';

$theme_options = new FavPress_Option (array(
    'is_dev_mode'           => false,                                  // dev mode, default to false
    'option_key'            => 'audent_option',                           // options key in db, required
    'page_slug'             => 'audent_option',                           // options page slug, required
    'template'              => $options,                              // template file path or array, required
    'menu_page'             => 'themes.php',                           // parent menu slug or supply `array` (can contains 'icon_url' & 'position') for top level menu
    'use_auto_group_naming' => true,                                   // default to true
    'use_util_menu'         => true,                                   // default to true, shows utility menu
    'minimum_role'          => 'edit_theme_options',                   // default to 'edit_theme_options'
    'layout'                => 'fixed',                                // fluid or fixed, default to fixed
    'page_title'            => __( 'Настройки темы', 'vp_textdomain' ), // page title
    'menu_label'            => __( 'Настройки темы', 'vp_textdomain' ), // menu label
));

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
