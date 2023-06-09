<?php
/**
 * kaursworld2023 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kaursworld2023
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', time() );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kaursworld2023_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on kaursworld2023, use a find and replace
		* to change 'kaursworld2023' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'kaursworld2023', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'kaursworld2023' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'kaursworld2023_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'kaursworld2023_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kaursworld2023_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kaursworld2023_content_width', 640 );
}
add_action( 'after_setup_theme', 'kaursworld2023_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kaursworld2023_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kaursworld2023' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kaursworld2023' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer One', 'kaursworld2023' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'kaursworld2023' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kaursworld2023_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kaursworld2023_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'kaursworld2023-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kaursworld2023-style', 'rtl', 'replace' );

	wp_enqueue_script( 'kaursworld2023-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style( 'fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css' );
	wp_enqueue_script( 'jquery-include', get_template_directory_uri() . '/js/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'particles-js', get_template_directory_uri() . '/js/particles.js', array(), _S_VERSION, true );
	wp_enqueue_script('particles-min-js', 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js');
	//wp_enqueue_script( 'bootstrap-min-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js' );
	
}
add_action( 'wp_enqueue_scripts', 'kaursworld2023_scripts' );

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

/* Custom Code Start */

require_once('wp_bootstrap_navwalker.php');
function my_custom_mime_types( $mimes ) {
 
	// New allowed mime types.
	$mimes['svg'] = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	$mimes['doc'] = 'application/msword';
	 
	// Optional. Remove a mime type.
	unset( $mimes['exe'] );
	 
	return $mimes;
	}
	add_filter( 'upload_mimes', 'my_custom_mime_types' );
	
// Function to handle the thumbnail request
function get_the_post_thumbnail_src($img)
{
  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function wpvkp_social_buttons($content) {
    global $post;
    if(is_singular()){
    
        // Get current page URL 
        $sb_url = urlencode(get_permalink());
 
        // Get current page title
        $sb_title = str_replace( ' ', '%20', get_the_title());
        
        // Get Post Thumbnail for pinterest
        $sb_thumb = get_the_post_thumbnail_src(get_the_post_thumbnail());
 
        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url.'&amp;via=wpvkp';
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;
        //$instaURL = 'https://www.instagram.com/sharer/sharer.php?u='.$sb_url;
       // $bufferURL = 'https://bufferapp.com/add?url='.$sb_url.'&amp;text='.$sb_title;
        $whatsappURL = 'whatsapp://send?text='.$sb_title . ' ' . $sb_url;
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;

       if(!empty($sb_thumb)) {
            $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;
        }
        else {
            $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;description='.$sb_title;
        }
 
        // Based on popular demand added Pinterest too
       // $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;
       // $gplusURL ='https://plus.google.com/share?url='.$sb_title.'';
 
        // Add sharing button at the end of page/page content
        $content .= '<div class="social-box"><div class="social-btn">';
        $content .= '<a class="col-1 sbtn s-twitter" href="'. $twitterURL .'" target="_blank" rel="nofollow"><span>Share on twitter</span></a>';
        $content .= '<a class="col-1 sbtn s-facebook" href="'.$facebookURL.'" target="_blank" rel="nofollow"><span>Share on facebook</span></a>';
        $content .= '<a class="col-2 sbtn s-whatsapp" href="'.$whatsappURL.'" target="_blank" rel="nofollow"><span>WhatsApp</span></a>';
       // $content .= '<a class="col-2 sbtn s-instagram" href="'.$instaURL.'" target="_blank" rel="nofollow"><span>Share on Instagram</span></a>';
        $content .= '<a class="col-2 sbtn s-linkedin" href="'.$linkedInURL.'" target="_blank" rel="nofollow"><span>LinkedIn</span></a>';
        $content .= '</div></div>';
        
        return $content;
    }else{
        // if not a post/page then don't include sharing button
        return $content;
    }
};
// Enable the_content if you want to automatically show social buttons below your post.

// add_filter( 'the_content', 'wpvkp_social_buttons');

// This will create a wordpress shortcode [social].
// Please it in any widget and social buttons appear their.
// You will need to enabled shortcode execution in widgets.
add_shortcode('social','wpvkp_social_buttons');

function wpbeginner_numeric_posts_nav() {
  
    if( is_singular() )
        return;
  
    global $wp_query;
  
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
  
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
  
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
  
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
  
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
  
    echo '<div class="navigation"><ul>' . "\n";
  
    /** Previous Post Link */
    // if ( get_previous_posts_link() )
    //     printf( '<li class="prev">%s</li>' . "\n", get_previous_posts_link() );
  
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
  
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
  
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
  
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
  
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
  
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
  
    /** Next Post Link */
    // if ( get_next_posts_link() )
    //     printf( '<li class="next">%s</li>' . "\n", get_next_posts_link() );
  
    echo '</ul></div>' . "\n";
  
}