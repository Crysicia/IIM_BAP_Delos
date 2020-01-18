<?php

/*
Template Name: Association
*/

get_header();
set_jumbotron("/images/kelli-mcclintock--2M4B_nFZUs-unsplash.jpg");
get_template_part( 'templates/header', 'jumbotron' ); ?>

<div class="soutenir">
    <div class="card">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/presentation.png" alt="Présentation">
        </div>
        <a href="<?php echo home_url('/presentation'); ?>">Présentation</a>
    </div>
    <div class="card">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/notre-projet.png" alt="Notre projet">
        </div>
        <a href="<?php echo home_url('/notre-projet'); ?>">Notre projet</a>
    </div>
    <div class="card">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/organisation.png" alt="L'organisation">
        </div>
        <a href="<?php echo home_url('/organisation'); ?>">L'organisation</a>
    </div>
</div>

<?php get_footer(); ?>