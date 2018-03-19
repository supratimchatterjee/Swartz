<?php
/**
	Template Name: Home
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
	<div class="site-banner">
		<div class="uk-position-relative" data-uk-slideshow="{autoplay:true}">
        <?php if (have_rows('slider')):?>
		    <ul class="uk-slideshow uk-margin-remove-bottom">
            <?php while(have_rows('slider')): the_row();?>
		        <li><img src="<?php the_sub_field('image_sli');?>"></li>
			<?php endwhile;?>
		    </ul>
            <?php endif;?>
		</div>
	</div>
	<div class="uk-block about uk-contrast">
		<div class="uk-container uk-container-center">
			<div class="uk-width-medium-9-10 uk-container-center uk-text-justify">
				<h2 class="uk-text-center"><span><?php the_field('title_pl');?></span></h2>
				<p><?php the_field('description_pl');?></p>
			</div>
		</div>
	</div>
	<div class="uk-block service">
		<div class="uk-container uk-container-center">
			<div class="uk-width-medium-9-10 uk-container-center tm-block-muted uk-text-center uk-contrast">
				<h2><span><?php the_field('heading_ser');?></span></h2>
				<div class="uk-flex uk-flex-center uk-margin-large-top tm-service-module">
                <?php if (have_rows('services')):?>
                <?php while(have_rows('services')): the_row();?>
					<div class="uk-panel uk-panel-box uk-contrast">
                        <div class="uk-panel-teaser">
                            <img src="<?php the_sub_field('image_ser');?>">
                        </div>
                        <p><?php the_sub_field('description_ser');?></p>
                    </div>
				<?php endwhile;?>
                <?php endif;?>                    
				</div>
			</div>
		</div>
	</div>
	<div class="uk-block projects">
		<div class="uk-container uk-container-center">
			<div class="uk-width-medium-9-10 uk-container-center uk-text-center">
				<h2><span><?php the_field('heading_proj');?></span></h2>
				<div class="uk-grid uk-margin-large-top" data-uk-margin="{cls:'uk-margin-large-top'}">
                <?php if (have_rows('projects')):?>
                <?php while(have_rows('projects')): the_row();?>
					<div class="uk-width-medium-1-4 uk-position-relative">
						<img src="<?php the_sub_field('image_pro');?>">
						<a href="<?php the_sub_field('link');?>" class="uk-position-cover"></a>
					</div>
				<?php endwhile;?>
                <?php endif;?>  
				</div>
				<a class="uk-button uk-button-large uk-contrast" href="#">More Projects..</a>
			</div>
		</div>
	</div>
	<?php endwhile; ?>



<?php
get_footer();
