<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swartz
 */

?>

	<footer class="site-footer">
		<div class="section-upper uk-block">
			<div class="uk-container uk-container-center">
				<div class="uk-grid uk-flex-middle" data-uk-margin="{cls: 'uk-margin-top'}">
					<div class="uk-width-large-1-3 uk-text-justify">
						<div class="uk-text-center">
							<a href="/home"><img class="uk-width-medium-6-10 uk-width-small-5-10" src="<?php the_field('footer_logo','option');?>"></a>
						</div>
						<p><?php the_field('left_side_content','option');?></p>
					</div>
					<div class="uk-width-large-1-3">
						<img src="<?php echo get_template_directory_uri();?>/images/footer-map.png">
					</div>
					<div class="uk-width-large-1-3 address">
						<h3>How to reach us</h3>
						<ul class="uk-grid uk-flex-middle" data-uk-margin="{cls:'uk-margin-large-top'}">
							<li class="uk-width-2-10">
								<img src="<?php echo get_template_directory_uri();?>/images/icon_1.png">
							</li>
							<li class="uk-width-7-10">								
								<?php the_field('address','option');?>
							</li>
							<li class="uk-width-2-10">
								<img src="<?php echo get_template_directory_uri();?>/images/icon_2.png">
							</li>
							<li class="uk-width-7-10">								
								<a class="uk-link" href="<?php the_field('email','option');?>"><?php the_field('email','option');?></a>
							</li>
							<li class="uk-width-2-10">
								<img src="<?php echo get_template_directory_uri();?>/images/icon_3.png">
							</li>
							<li class="uk-width-7-10">								
								<a class="uk-link" href="<?php the_field('phone_number','option');?>"><?php the_field('phone_number','option');?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section-lower uk-block uk-contrast">
			<div class="uk-container uk-container-center">
				<div class="uk-width-medium-9-10 uk-container-center">
					<div class="uk-grid uk-flex-middle">
						<div class="uk-width-5-10">
							© JGH Plumbing &amp; Heating, Inc.  •  All rights reserved.  
						</div>
						<div class="uk-width-5-10 uk-text-right">
							by Infinite Color Inc.
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
