<?php
/*
Template Name: Accueil
*/
get_header();


?>
<?php get_template_part( 'templates/header', 'page' ); ?>
<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<?php get_template_part( 'pages/content', 'accueil' ); ?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->
<!-- <?php get_template_part( 'templates/footer', 'page' ); ?> -->
<?php
get_footer();
?>
