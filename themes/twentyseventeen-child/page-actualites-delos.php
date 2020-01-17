<?php

/*
Template Name: Actualités Délos
*/

get_header();
set_jumbotron("/images/actualites-delos.jpg");
get_template_part('templates/header', 'jumbotron');
?>

<div class="container-buttons-fullwidth">
    <div class="container-buttons-center">
        <div class="container-trier">
            <div class="container-texte-trier">
                <p class="texte-trier">Trier par date</p>
                <div class="arrow-down"></div>
            </div>
        </div>
        <div class="container-themes">
            <div class="container-texte-themes">
                <p class="texte-themes">Thèmes<p>
                <div class="arrow-down"></div>
            </div>
        </div>
        <div class="container-filtres">
            <div class="container-texte-filtres">
                <p class="texte-filtres">Filtres</p>
                <div class="arrow-down"></div>
            </div>
        </div>
        <div class="container-recherches">
            <div class="container-texte-recherches">
                <p class="texte-recherches">Recherches</p>
                <div class="arrow-down"></div>
            </div>
        </div>
    </div> <!-- container-buttons-center -->
</div> <!-- container-buttons-fullwidth -->

<section class="section-actualites-delos">
    <div class="container-articles-delos">
        <article class="article-delos">
            <div class="article-delos-picture">
                <div class="article-delos-emploi">
                    <p class="article-delos-title">Emploi</p>
                </div>
            </div>
        </article>
        <article class="article-delos">
            <div class="article-delos-picture"></div>
        </article>
        <article class="article-delos">
            <div class="article-delos-picture"></div>
        </article>
        <article class="article-delos">
            <div class="article-delos-picture"></div>
        </article>
    </div>
</section>