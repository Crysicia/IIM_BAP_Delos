<?php

/*
Template Name: test
*/

get_header();
set_jumbotron("/images/kelli-mcclintock--2M4B_nFZUs-unsplash.jpg");
get_template_part( 'templates/header', 'jumbotron' ); ?>

<ul>
<?php
$args = array( 'numberposts' => 5, 'order'=> 'DSC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?> 

		<li><?php the_title(); ?></li>
		<li><?php the_excerpt(); ?></li>

<?php endforeach; ?>
</ul>


<?php get_footer(); ?>