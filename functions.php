<?php
/**
 *    Sets up theme defaults and registers support for various WordPress features.
 *
 *    Note that this function is hooked into the after_setup_theme hook, which
 *    runs before the init hook. The init hook is too late for some features, such
 *    as indicating support for post thumbnails.
 */

/**
 *    WP Enqueue Stylesheets
 */
if ( ! function_exists( 'illdy_enqueue_stylesheets' ) ) {
	add_action( 'wp_enqueue_scripts', 'illdy_enqueue_stylesheets' );

	function illdy_enqueue_stylesheets() {

		// Google Fonts
		$google_fonts_args = array(
			'family' => 'Source+Sans+Pro:400,900,700,300,300italic|Lato:300,400,700,900|Poppins:300,400,500,600,700',
		);

		// WP Register Style
		wp_register_style( 'illdy-google-fonts', add_query_arg( $google_fonts_args, 'https://fonts.googleapis.com/css' ), array(), null );

		// WP Enqueue Style
		if ( 1 == get_theme_mod( 'illdy_preloader_enable', 1 ) && ! is_customize_preview() ) {
			wp_enqueue_style( 'illdy-pace', get_template_directory_uri() . '/layout/css/pace.min.css', array(), '', 'all' );
		}

		wp_enqueue_style( 'illdy-google-fonts' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/layout/css/bootstrap.min.css', array(), '3.3.6', 'all' );
		wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/layout/css/bootstrap-theme.min.css', array(), '3.3.6', 'all' );
		wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/layout/css/fontawesome-all.min.css', array(), '5.0.8', 'all' );
		wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/layout/css/owl-carousel.min.css', array(), '2.0.0', 'all' );
		if ( get_theme_mod( 'illdy_projects_lightbox', 0 ) == 1 ) {
			wp_enqueue_style( 'illdy-fancybox', get_template_directory_uri() . '/layout/css/jquery.fancybox.css', array(), '', 'all' );
		}
		wp_enqueue_style( 'illdy-main', get_template_directory_uri() . '/layout/css/main.css', array(), '', 'all' );
		if ( get_theme_mod( 'illdy_sticky_header_enable', false ) ) {
			$background_color = get_theme_mod( 'illdy_sticky_header_background_color', '#000000' );
			if ( '#000000' != $background_color ) {
				$custom_css = '#header .is-sticky .top-header {background-color: ' . esc_attr( $background_color ) . ';}';
				wp_add_inline_style( 'illdy-main', $custom_css );
			}
		}
		wp_enqueue_style( 'illdy-custom', get_template_directory_uri() . '/layout/css/custom.css', array(), '', 'all' );
		wp_enqueue_style( 'illdy-style', get_stylesheet_uri(), array(), '1.0.16', 'all' );
	}
}

/**
 *    WP Enqueue JavaScripts
 */
if ( ! function_exists( 'angrytoken_enqueue_javascripts' ) ) {
    add_action( 'wp_enqueue_scripts', 'angrytoken_enqueue_javascripts' );
	function angrytoken_enqueue_javascripts() {
		wp_enqueue_script( 'angrytoken-video', get_stylesheet_directory_uri() . '/layout/js/angrytoken.js', array('jquery'), '1.0.16', true );
    }
}

add_action(‘after_setup_theme’, ‘remove_admin_bar’);

function remove_admin_bar() {
    show_admin_bar(false);
}

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function angry_dynamic_menu_items( $menu_items) {
    if (is_user_logged_in()) {
        $menu_name = 'LOG OUT';
        $menu_link = '';
    } else {
        $menu_name = 'LOG IN';
        $menu_link = '';
    } 

    foreach ( $menu_items as $menu_item ) {
        if ( 'SIGN IN' == $menu_item->title ) {
                $menu_item->title = $menu_name;
        }
    }
    return $menu_items;
}

add_filter('wp_nav_menu_objects', 'angry_dynamic_menu_items');
