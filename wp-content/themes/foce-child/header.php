<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
        <!-- on inclut jQuery via CDN -->
    <!--    <script
			  src="https://code.jquery.com/jquery-3.7.1.js"
			  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
			  crossorigin="anonymous"></script> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
<!-- ************************ -->
<!-- Modification du menu pour affichage en menu burger --> 
<!-- ************************ -->

<!-- Titre du site / lien vers l'accueil de la barre de navigation --> 
            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>

<!-- Icone burger --> 
            <button class="burger-icon" aria-expanded="true">
                <span class="burger-icon__line"></span>
            </button> 
<!-- ************************ -->
		</nav> <!-- Fin site-navigation -->


<!-- ******* Début overlay ***************** -->
<div id="overlay" class="overlay">
    <div class="overlay__logo">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/overlay-logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
    </div>
<!-- Contenu menu Overlay -->
    <nav class="overlay__menu">
<!-- Liste des liens du menu --> 
        <ul>
            <li class="overlay__menu-story-link"><a href="#story">Histoire</a></li>
            <li class="overlay__menu-characters-link"><a href="#characters">Personnages</a></li>
            <li class="overlay__menu-place-link"><a href="#place">Lieu</a></li>
            <li class="overlay__menu-studio-link"><a href="#studio">Studio Koukaki</a></li>
        </ul>
    </nav> 
    <div class="overlay__footer">
            <a href="#">STUDIO KOUKAKI</a></li>
    </div>
</div>       
<!-- ******* fin overlay ***************** -->

	</header><!-- #masthead -->