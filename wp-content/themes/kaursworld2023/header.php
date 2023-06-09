<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kaursworld2023
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FGW1G7W022"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FGW1G7W022');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P27KL8T');</script>
<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inspiration&family=Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Yeseva+One&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- <script defer async src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> -->
	<script>var ajaxURL = '<?php echo esc_js(admin_url('admin-ajax.php'));?>';</script>
	<meta name="google-site-verification" content="9A7isjvOWFzqp-Zkh1e7PTsHb4I1ygO5075yrOQb4jk" />
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7854984281382238"
     crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P27KL8T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kaursworld2023' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="desktop-show-only">
			<?php get_template_part('template-parts/desktop', 'header');?>
		</div>
		<div class="mobile-show-only" style="display:none">
		<?php get_template_part('template-parts/mobile', 'header');?>
		</div>
	</header><!-- #masthead -->
