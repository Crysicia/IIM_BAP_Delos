<?php

/*
Template Name: Presentation
*/

get_header();
get_template_part( 'templates/header', 'jumbotron' ); ?>


<div class="presentation-main">

    <div class="presentation-paragraphe">
        <p>
            Il y a cinquante ans des parents se sont regroupés pour trouver une solution d’accueil et d’éducation pour
            leurs enfants déficients intellectuels.
            Sous la forme Association Loi 1901 La Rencontre pour Versailles et l’Envol pour Mantes furent donc créées,
            l’une en 1963, l’autre en 1964. Toutes deux adhérent à l’UNAPEI qui défend au niveau national les intérêts
            des enfants et de leurs familles.
        </p>
        <p>
            Ce sont d’abord les IME qui sont ouverts puis suivent les différents établissements et services : foyers,
            CAT devenu ESAT depuis, Services d’accompagnement, d’accueil de jour, hôpital de jour… sans oublier les
            délégations de service public que sont nos CHL et CGL.
        </p>
        <p>
            A la même époque des parents d’enfants autistes ont eu la même préoccupation : trouver une réponse adaptée à
            la prise en charge de leurs enfants. Ils ont eux aussi créé une association nationale dénommée ASITP. Sous
            l’égide de cette dernière, Sésame Autisme, créé en 1989, a ouvert deux FAM l’un à Plaisir en 2000 et l’autre
            à Limay en 2006.
        </p>
        <p>
            Cette expérience de travail en commun s’étant révélée fructueuse la fusion a dès lors été envisagée et a
            pris effet le 1er janvier 2015 sous le nom de Délos Apei 78.
        </p>
        <p>
            L’histoire ne s’arrête pas là, une nouvelle page s’ouvre. De nouvelles problèmatiques se posent : personnes
            handicapées vieillissantes, places en accueil de jour insuffisantes, places pour les tout petits …
        </p>
        <p>
            Tout cela repose sur l’action de parents et de bénévoles, dont nous avons besoin pour continuer l’action en
            faveur de nos enfants.

        </p>
    </div>

    <div class="valeur-banner">
        <div class="valeur-banner-img"></div>
        <div class="valeur-banner-title">
            <h2>NOS VALEURS</h2>
        </div>
    </div>

    <div class="valeur-container-main">

        <div class="valeur-container-content">

            <div class="valeur-container-content-block">
                <div class="valeur-container-content-block-left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/picto_etique@2x.png" alt="ethique"
                        class="valeur-container-content-block-img-ecoute">
                    <h3>L'ÉTHIQUE</h3>
                    <p>Notre action vise à préserver la dignité , l’intégrité physique et morale des personnes malades.
                    </p>
                    <p>Nous veillons à ce que l’accompagnement, l’aide, le soutien, la protection et les soins soient
                        effectués par des professionnels qualifiés, agissant avec discernement et bienveillance.</p>
                </div>
            </div>
            <div class="valeur-container-content-block">
                <div class="valeur-container-content-block-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/picto_ecoute@2x.png" alt="ethique"
                        class="valeur-container-content-block-img-ecoute">
                    <h3>L'ÉCOUTE</h3>
                    <p>L’humain est au centre de notre système de valeurs. Nous sommes à l’écoute des besoins du patient
                        et de ses proches tout en respectant ses choix et ses valeurs.</p>

                </div>
            </div>
            <div class="valeur-container-content-block">
                <div class="valeur-container-content-block-right">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Picto_qualite@2x.png" alt="ethique"
                        class="valeur-container-content-block-img-ecoute">
                    <h3>LA QUALITÉ</h3>
                    <p>Nous veillons à la qualité de l’accueil des familles dès le premier contact.</p>
                    <p>Nous suivons les pistes d’amélioration en continue de la qualité, issues des évaluations
                        internes et externes tout en prenant en compte les préconisations de l’ANESM.</p>
                </div>
            </div>
        </div>

    </div>


</div>

</div>

<?php
get_footer();
?>