<?php

/*
Template Name: Informations
*/

get_header();
set_jumbotron("/images/jumbotron-informations.jpg");
get_template_part( 'templates/header', 'jumbotron' ); ?>

<div class="soutenir">
    <div class="card">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/droits-et-aides.jpg" alt="Droits et aides">
        </div>
        <a href="">Droits et aides</a>
    </div>
    <div class="card">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact.jpg" alt="NContact">
        </div>
        <a href="">Contact</a>
    </div>
    <div class="card">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/glossaire.jpg" alt="Glossaire">
        </div>
        <a href="">Glossaire</a>
    </div>
</div>

<?php get_footer(); ?>