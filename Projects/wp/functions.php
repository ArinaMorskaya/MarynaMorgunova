<?php
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'favicon', get_template_directory_uri() . '/assets/img/favicon.ico' );
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/fonts/gothicA1.css' );
	wp_enqueue_style( 'icons', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap-4.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'owlCarousel', get_template_directory_uri() . '/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'owlCarouselTheme', get_template_directory_uri() . '/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js');
	
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'owlCarouselJs', get_template_directory_uri() . '/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'bootstrapJs', get_template_directory_uri() . '/assets/vendor/bootstrap-4.0/js/bootstrap.min.js', array('jquery'), 'null', true );
});

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag ' );
add_theme_support( 'custom-logo' );


add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	if( $dosvg ){

		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}
	}
	return $data;
}

?>


    