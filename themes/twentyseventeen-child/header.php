<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="header-infos">
        <a href="<?php echo home_url('/'); ?>" class="logo"></a>

        <div class="right-infos">
            <div class="email-container">
                <div class="email-img"></div>
                <div class="email-infos">
                    <h6>Email</h6>
                    <p>siege@delos78.fr</p>
                </div>
            </div> <!-- email-container -->

            <div class="tel-container">
                <div class="tel-img"></div>
                <div class="tel-infos">
                    <h6>Téléphone</h6>
                    <p>0634940202</p>
                </div>
            </div> <!-- tel-containter -->
        </div> <!-- right-infos -->
    </div> <!-- header-infos -->

    <div class="gray-line"></div>

    <nav>
    <?php
/*     wp_nav_menu(array ('menu' => 'header'));
 */    ?>
         <ul class="ul">
            <li><a href="<?php echo home_url('/association'); ?>">L'association</a>
                <ul class="dropdown">
                    <li class="dropdown-liste"><a class="dropdown-text" href="<?php echo home_url('/presentation'); ?>">Présentation</a></li>
                    <li class="dropdown-liste"><a class="dropdown-text" href="<?php echo home_url('/notre-projet'); ?>">Notre Projet</a></li>
                    <li class="dropdown-liste"><a class="dropdown-text" href="<?php echo home_url('/organisation'); ?>">L'organisation</a></li>
                </ul>
            </li>
            <li><a href="<?php echo home_url('/nous-soutenir'); ?>">Nous soutenir</a></li>
            <li><a href="">Établissements et services</a></li>
            <li><a href="">Offres d'emploi</a></li>
            <li><a href="<?php echo home_url('/actualites-delos-apei-78'); ?>">Actualités</a></li>
            <li><a href="">Informations</a></li>
            <a href="" class="donate-container">
                <h6>Faire un don</h6>
                <div class="donate-img"></div>
            </a>
        </ul>
    </nav>
</header>