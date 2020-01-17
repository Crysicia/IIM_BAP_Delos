<?php

/*
Template Name: Nous soutenir
*/

get_header();
set_jumbotron("/images/anton-chernyavskiy-d9cHNqGoAG0-unsplash.jpg");
get_template_part( 'templates/header', 'jumbotron' ); ?>

<div class="soutenir">
    <div class="card">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/webaroo-com-au-3Mhgvrk4tjM-unsplash.jpg" alt="">
        </div>
        <a href=""><span>Droits et aides</span></a>
    </div>
    <div class="card">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/webaroo-com-au-3Mhgvrk4tjM-unsplash.jpg" alt="">
        </div>
        <a href="">Contact</a>
    </div>
    <div class="card">
        <div class="image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/syd-wachs-slItfWbhijc-unsplash.jpg" alt="">
        </div>
        <a href="">Glossaire</a>
    </div>
</div>

<?php get_footer(); ?>