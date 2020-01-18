<?php

/*
Template Name: Nous soutenir
*/

get_header();
set_jumbotron("/images/jumbotron-soutenir.jpg");
get_template_part( 'templates/header', 'jumbotron' ); ?>

<div class="soutenir">
    <div class="card">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adherer-association.png" alt="Adhérer à l'association">
        </div>
        <a href="">Adhérer à l'association</a>
    </div>
    <div class="card">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/esat.png" alt="Faire appel à un ESAT">
        </div>
        <a href="">Faire appel à un ESAT</a>
    </div>
    <div class="card">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faire-don.png" alt="Faire un don">
        </div>
        <a href="">Faire un don</a>
    </div>
</div>

<?php get_footer(); ?>