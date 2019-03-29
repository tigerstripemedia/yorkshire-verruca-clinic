<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yorkshire_Verruca_Clinic
 */

get_header();
?>
	
	<section id="page-content">
		<div class="bg-overlay">
	      <div class="container default-page">
	      	
	      	<h1 class="mb-4 text-center"><?php the_title(); ?></h1>
	      	
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
	      </div>
	    </div>
	</section>

<?php
get_template_part( 'template-parts/section', 'book' );

get_template_part( 'template-parts/section', 'testimonials' );

get_footer();
