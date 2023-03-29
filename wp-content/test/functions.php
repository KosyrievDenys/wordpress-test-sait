<?php
	include_once( __DIR__ . '/inc/test-recent-posts.php' );
	add_action( 'wp_enqueue_scripts', function () {

		wp_enqueue_style( 'style', get_stylesheet_uri() );
		//
		//    wp_deregister_script('jquery');
		//    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
		//    wp_enqueue_script('jquery');
		wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [], 'null', true );
	} );
	//
	//  add_theme_support('post-thumbnails');
	//  add_theme_support('title-tag');
	//  add_theme_support('custom-logo');
	//
	add_action( 'after_setup_theme', function () {
		register_nav_menu( 'top', 'Для шапки' );
		register_nav_menu( 'footer', 'Для підвалу' );
		add_theme_support( 'post-thumbnails' );
	} );

	add_action( 'widgets_init', function () {
		register_sidebar( [
			'name'          => 'Sidebar Right',
			'id'            => 'sidebar-right',
			'description'   => 'Права колонка',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n",
		] );

		register_sidebar( [
			'name'        => 'Sidebar Bottom',
			'id'          => 'sidebar-bottom',
			'description' => 'Не працюючий приклад',
		] );

		register_widget( 'Test_Recent_Posts' );
	} );

	//	add_shortcode( 'test_recent', function ( $atts ) {
	//		$atts = shortcode_atts( array(
	//			'cnt' => 5
	//		), $atts );
	//
	//		$str = '';
	//
	//		$args = array(
	//			'numberposts' => $atts['cnt'],
	//			'orderby'     => 'date',
	//			'order'       => 'DESC',
	//			'post_type'   => 'post',
	//		);
	//
	//		$posts - get_posts( $args );
	//
	//		foreach ( $posts as $post ) {
	//			setup_postdata( $post );
	//
	//			$link  = get_the_permalink();
	//			$title = get_the_title();
	//			$dt    = get_the_date();
	//			$intro = CFS()->get( 'intro' );
	//
	//			$str .= '<div>
	//<div><em>$dt</em></div>
	//<div><strong>$title</strong></div>
	//<div>$intro</div>
	//<a href=\"$link\">Далі...</a>
	//</div>';
	//		}
	//
	//		wp_reset_postdata();
	//
	//		return $str;
	//	} );

