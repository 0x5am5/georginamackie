<?php
/*
Theme Name: Georgina Mackie
Author: Sam Gregory
Author URI: http://samgregorydigital.co.uk/
Description: Georgina Mackie Fitness theme
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

get_header(); ?>

<div id="main-content" class="content">

	<div id="primary" class="about">
		<h2 class="access">Blog</h2>

		<?php if (get_field('banner_image')) : ?>
			<div class="banner">
				<img src="<?php echo get_field('banner_image')['url']; ?>" alt="<?php echo get_field('banner_image')['title']; ?>" />
			</div>
		<?php endif; ?>

		<div id="content" class="posts" role="main">

		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				// Start the Loop.
				// get_template_part( 'content', get_post_format() );

				?>
			<div class="post">
				<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
	           	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

	            <div class="post-content">
	            	<?php the_content(); ?>
	            </div>

	            <p class="postmetadata">
					Posted in <?php the_category(', ') ?> 
					<strong>|</strong>
					<?php edit_post_link('Edit','','<strong>|</strong>'); ?>  
					<?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
				</p>
			</div>

		<?php

			endwhile; else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>

		<div class="navigation">
 			<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
 			<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
 		</div>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php // get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
//get_sidebar();
get_footer();