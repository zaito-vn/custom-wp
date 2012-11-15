<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>

  <!-- Navbar ================================================== -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="">Bootstrap</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="">
              <a href="<?php echo home_url( '/' ); ?>">Home</a>
            </li>
            <li class="divider-vertical"></li>
            <li class="">
              <a href="contact.html">Contact</a>
            </li>
            <li class="">
              <a href="gallery.html">Gallery</a>
            </li>
            <li class="">
              <a href="twitter.html">Twitter</a>
            </li>
          </ul>
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="hero-unit" style="position: relative">
      <h1>
        <a href="<?php echo home_url( '/' ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
        </a>
      </h1>
			<p><?php bloginfo( 'description' ); ?></p>
    </div>