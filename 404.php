<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Yorkshire_Verruca_Clinic
 */
 get_header();
?>

	<div id="primary" class="content-area" style="background-color: #f1f1f1; padding: 100px 0; text-align: center;">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				
				<div class="container">
					<h1 style="font-size: 150px;">404</h1>
					<h2 class="display-4">Oops, something went wrong...</h2>
					<h4>It seems the page you are looking for doesn't exist. We are sorry about that. Try heading back to our homepage.</h4>
					<a href="/" class="btn btn-primary btn-lg btn-block"><i class="fas fa-home"></i> Go home</a>
				</div>
				
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
get_footer();
