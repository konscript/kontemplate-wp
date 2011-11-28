<?php
/**
 * Header Template (header.php)
 *
 * The header template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the top of the file. It is used mostly as an opening
 * wrapper, which is closed with the footer.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * NOTE:
 * This template file calls the Wordpress function wp_head() which
 * will print any scripts or stylesheets enqeued by third party
 * plugins or Wordpress itself.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<title><?php hybrid_document_title(); ?></title>
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!-- CSS: implied media=all -->
	<!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/stylesheet/compiled/main.css">
  <!-- end CSS-->
	
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/javascript/main.js"></script>

	<?php
	
	/* Always have wp_head() just before the closing </head>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to add elements to <head> such
   * as styles, scripts, and meta tags.
   */
	wp_head(); ?>
	
</head>
<body class="bp <?php hybrid_body_class(); ?>">

	<div id="body-wrapper">
		<div id="header-container">
			<header id="header">
				<?php do_atomic( 'header' ); // hybrid_header ?>
				<?php get_template_part( 'menu', 'primary' ); ?>
			</header><!-- #header -->
		</div><!-- #header-container -->

		<div id="content-container" role="main">