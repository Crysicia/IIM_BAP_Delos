<?php

/*
Template Name: Projet
*/

get_header();
set_jumbotron("/images/kelli-mcclintock--2M4B_nFZUs-unsplash.jpg");
get_template_part( 'templates/header', 'jumbotron' ); ?>


<div class="projet-main">

    <div class="projet-obj">
        <div class="projet-obj-container">
            <div class="projet-obj-container-title"><span>Notre but :</span></div>
            <div class="projet-obj-container-p"><span>Répondre aux besoins et aux attentes des personnes handicapées
                    mentales ,psychiques, autistes ou polyhandicapées, favoriser leur insertion et leur permettre de
                    vivre dignement.</span></div>
        </div>
        <div class="projet-obj-container">
            <div class="projet-obj-container-title"><span>Nos moyens :</span></div>
            <div class="projet-obj-container-p"><span>Un accompagnement multidisciplinaire, adapté, durable, permanent
                    et évolutif.</span></div>
        </div>
    </div>

    <div class="projet-pourquoi">
        <h2>POURQUOI UN PROJET ASSOCIATIF?</h2>
        <div class="block_1 hline-top"></div>
        <div class="projet-pourquoi-p">
            <p>
                Le rapprochement des trois associations l’Envol, la Rencontre et Sésame Autisme Ile-de-France Ouest a
                nécessité l’écriture d’un projet associatif commun.</p>
            <p>

                Ce projet associatif constitue pour nous parents et amis ainsi que pour tous ceux qui souhaitent
                s’impliquer dans notre association une réponse conforme à leur engagement.</p>
            <p>

                Il doit servir de référence et de base aux projets de nos établissements et services particulièrement
                pour les valeurs que nous partageons et dans la volonté d’améliorer la qualité de la prise en charge et
                de l’accompagnement des personnes que nous accueillons.</p>
            <p>

                Il doit aussi servir de référence aux adhérents, aux familles, aux personnes accueillies, aux
                professionnels , à tous nos partenaires extérieurs, et à tous ceux qui envisagent de participer au
                financement de nos projets.</p>
        </div>
    </div>

    <div class="projet-point">

        <div class="projet-point-container">

            <div class="projet-point-container-block" id="S">
                <div class="projet-point-container-block-head">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/01@2x.png" alt="1"
                        class="projet-service">
                    <div class="projet-point-container-block-head-title">
                        <h3>Service / Aide :</h3>
                        <span>des professionnels à l’écoute</span>
                    </div>
                </div>
                <div class="projet-point-container-block-tail">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/photo_service@2x.png" alt="service"
                        class="projet-service-bg">
                </div>
            </div>
            <div class="projet-point-container-block" id="H">
            <div class="projet-point-container-block-head">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/02@2x.png" alt="2"
                        class="projet-service">
                    <div class="projet-point-container-block-head-title">
                        <h3>Handicap :</h3>
                        <span>des familles accueillis et suivis</span>
                    </div>
                </div>
                <div class="projet-point-container-block-tail">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/enfant-trisomique@2x.png" alt="handicap"
                        class="projet-service-bg">
                </div>
            </div>
            <div class="projet-point-container-block" id="V">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/03@2x.png" alt=""
                        class="projet-service">
                    <div class="projet-point-container-block-head-title">
                        <h3>Valeurs :</h3>
                        <span>Vivre son handicap grâce à Delos Apei</span>
                    </div>
                    <div class="projet-point-container-block-tail">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/photo_valeurs@2x.png" alt="valeurs"
                        class="projet-service-bg">
                </div>
                </div>
            </div>

        </div>

    </div>














</div>





<?php
get_footer();
?>