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

    <section class="slider"></section>
    
    <div class="slider-container">
        <div class="projet-container">
            <h3 class="slider-title">Notre projet</h3>
            <p class="slider-infos">Adapté, durable, permanent et évolutif</p>
        </div>
        <div class="etablissements-container">
            <h3 class="slider-title">Établissements</h3>
            <p class="slider-infos">17 établissements et services</p>
        </div>
        <div class="soutiens-container">
            <h3 class="slider-title">Soutenez-nous</h3>
            <p class="slider-infos">Allons plus loin dans nos projets</p>
        </div>
    </div>

    <div class="actualites-container">
        <div class="actualites-title">
            <h2 class="actualites-h2">Actualités</h2>
            <div class="actualites-trait"></div>
        </div>

        <div class="articles-container">
            <article>
                <div class="article-first-picture"></div>
                <div class="article-description-container">
                    <h4 class="articles-h4">Nos sportifs courent sous les couleurs de Délos</h4>
                    <p class="articles-date">7 novembre 2019</p>
                    <p class="articles-description">Les 10 km de Thoiry ont eu lieu au mois de septembre.<br>
                        Mikael s'est engagé, il a terminé 16e sur 1500 coureurs. Eric a couru et porté une joëlette(...)
                    </p>
                </div>
                <div class="articles-suite-container">
                    <div class="article-green-button">Lire la suite</div>
                </div>
            </article>

            <article>
                <div class="article-second-picture"></div>
                <div class="article-description-container">
                    <h4 class="articles-h4">Nos sportifs courent sous les couleurs de Délos</h4>
                    <p class="articles-date">7 novembre 2019</p>
                    <p class="articles-description">Les 10 km de Thoiry ont eu lieu au mois de septembre.<br>
                        Mikael s'est engagé, il a terminé 16e sur 1500 coureurs. Eric a couru et porté une joëlette(...)
                    </p>
                </div>
                <div class="articles-suite-container">
                    <div class="article-green-button">Lire la suite</div>
                </div>
            </article>

            <article>
                <div class="article-third-picture"></div>
                <div class="article-description-container">
                    <h4 class="articles-h4">Nos sportifs courent sous les couleurs de Délos</h4>
                    <p class="articles-date">7 novembre 2019</p>
                    <p class="articles-description">Les 10 km de Thoiry ont eu lieu au mois de septembre.<br>
                        Mikael s'est engagé, il a terminé 16e sur 1500 coureurs. Eric a couru et porté une joëlette(...)
                    </p>
                </div>
                <div class="articles-suite-container">
                    <div class="article-green-button">Lire la suite</div>
                </div>
            </article>
        </div> <!-- articles-container -->

        <div class="actualites-button-container">
            <div class="article-see-button">
                <a class="see-texte" href="">Voir tout</a>
            </div>
        </div>
    </div> <!-- actualites-container -->
    
    <div class="espacement-container-actualites-delos"></div>
</body>
</html>

<?php get_footer(); ?>