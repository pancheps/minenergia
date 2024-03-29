<?php
/**
 * EndeWP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EndeWP
 */

if ( ! function_exists( 'endewp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function endewp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on EndeWP, use a find and replace
		 * to change 'endewp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'endewp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'endewp' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'endewp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'endewp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function endewp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'endewp_content_width', 640 );
}
add_action( 'after_setup_theme', 'endewp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function endewp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'endewp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'endewp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'endewp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function endewp_scripts() {
	wp_enqueue_style( 'endewp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'endewp-style-normalize', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style( 'endewp-style-header', get_template_directory_uri() . '/css/header.css');
	wp_enqueue_style( 'endewp-style-navigation', get_template_directory_uri() . '/css/navigation.css');
	wp_enqueue_style( 'endewp-style-portalhome', get_template_directory_uri() . '/css/portalhome.css');
	wp_enqueue_style( 'endewp-style-portalcolors', get_template_directory_uri() . '/css/portalcolors.css');
	wp_enqueue_style( 'endewp-style-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'endewp-style-nuxt', get_template_directory_uri() . '/css/nuxt.css');
	wp_enqueue_style( 'endewp-style-langs', get_template_directory_uri() . '/css/langs.css');
	wp_enqueue_style( 'endewp-style-servicio', get_template_directory_uri() . '/css/servicio.css');
	wp_enqueue_style( 'endewp-style-calificacion', get_template_directory_uri() . '/css/calificacion.css');
	wp_enqueue_style( 'endewp-style-terminos', get_template_directory_uri() . '/css/terminos.css');
	wp_enqueue_style( 'endewp-style-footer', get_template_directory_uri() . '/css/footer.css');
	wp_enqueue_style( 'endewp-style-search', get_template_directory_uri() . '/css/search.css');
	wp_enqueue_style( 'endewp-style-login', get_template_directory_uri() . '/css/login.css');
	wp_enqueue_style( 'endewp-style-page', get_template_directory_uri() . '/css/page.css');
	wp_enqueue_style( 'endewp-style-boxes', get_template_directory_uri() . '/css/boxes.css');
	wp_enqueue_style( 'endewp-style-all-fonts', get_template_directory_uri() . '/css/all.min.css');


	wp_enqueue_script( 'endewp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'endewp-script-responsive', get_template_directory_uri() . '/js/responsivemenu.js', array(), '20151215', true );
	wp_enqueue_script( 'endewp-script-jquery-min', get_template_directory_uri() . '/js/jquery-1.11.0.min.js', array(), '20151215' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'endewp_scripts' );

/**
 * Adds the post selector variable
 */
add_filter('query_vars', 'parameter_queryvars' );
function parameter_queryvars( $qvars )
{
	$qvars[] = 'subpId';
	return $qvars;
}

/**
 * Gets the total count of posts for the provided category
 */
function cat_post_count($category_name)
{
	$category_id = get_cat_ID($category_name);
	return get_category($category_id)->count;
}

/**
 * Gets the page for the posts
 */
function get_news_url()
{
	return get_permalink(get_option('page_for_posts'));
}

/**
 * Limits the excerpt length
 */
function the_excerpt_max_charlength($charlength, $readmore = true) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		if ($readmore)
			echo '<a href="' . get_the_permalink() . '">Leer más..</a>';
	} else {
		echo $excerpt;
	}
}
add_action( 'after_setup_theme', 'the_excerpt_max_charlength' );

/**
 * Limits the title lentgh
 */
function max_title_length( $title ) {
	// $max = 30;
	// if( strlen( $title ) > $max ) {
	// 	return substr( $title, 0, $max ). " ...";
	// } else {
	 	return $title;
	// }
}
add_filter( 'the_title', 'max_title_length');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

