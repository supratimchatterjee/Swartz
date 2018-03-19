<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package swartz
 */

get_header(); ?>

	
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="uk-block-large">
					<div class="uk-container uk-container-center">
						<?php the_content();?>
					</div>
				</div>
			<?php endwhile; ?>


<?php
get_footer();
