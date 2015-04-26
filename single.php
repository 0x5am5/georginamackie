<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="content">

	<div id="primary" class="about">

		<h2><?php the_title(); ?></h2>
        <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>

					<div class="post-content">
            			<?php the_content(); ?>
           			</div>
           		<?php

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile; ?>
				
				<div class="navigation">
 					<div class="alignleft"><?php previous_post(); ?></div>
		 			<div class="alignright"><?php next_post(); ?></div>
		 		</div>

		</div><!-- #content -->
	</div><!-- #primary -->

</div>

<?php
get_footer();
