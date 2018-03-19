<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swartz
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> 

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="site-header uk-position-relative">
	<div class="uk-container uk-container-center">
		<div class="tm-logo">
            <a href="/home" class="tm-navbar-brand"><img src="<?php the_field('header_logo','option');?>"></a>
        </div>
        <div class="uk-position-absolute uk-visible-small tm-mobile-menu uk-contrast">
            <a href="#offcanvas" data-uk-offcanvas><i class="uk-icon-navicon uk-icon-large"></i></a>
        </div>
	</div>
    <nav class="uk-navbar uk-navbar-attached uk-hidden-small">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary', 'menu_class' => 'uk-navbar-nav uk-grid uk-width-1-1 uk-text-center', 'container' => false ) ); ?>
            <?php /*?><ul class="uk-navbar-nav uk-grid uk-width-1-1 uk-text-center">
                <li class="uk-width-medium-1-5">
                    <a href="#">Home</a>
                </li>
                <li class="uk-width-medium-1-5">
                    <a href="#">About Us</a>
                </li>
                <li class="uk-width-medium-1-5">
                    <a href="#">Our Services</a>
                </li>
                <li class="uk-width-medium-1-5">
                    <a href="#">Our Projects</a>
                </li>
                <li class="uk-width-medium-1-5">
                    <a href="#">Contact Us</a>
                </li>
            </ul><?php */?>
        </nav>
</header>

<!--Offcanvas-->
    <div id="offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary', 'menu_class' => 'uk-list uk-nav uk-nav-offcanvas', 'container' => false ) ); ?>
        </div>
    </div>
<!--End-->