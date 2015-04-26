<?php
/**
 * The template for displaying Author archive pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="content">

	<div id="primary" class="about">

		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h2 class="archive-title">
					<?php
						/*
						 * Queue the first post, that way we know what author
						 * we're dealing with (if that is the case).
						 *
						 * We reset this later so we can run the loop properly
						 * with a call to rewind_posts().
						 */
						the_post();

						printf( __( 'All posts by "%s"' ), get_the_author() );
					?>
				</h2>
				<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<div class="author-description"><?php the_author_meta( 'description' ); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<div class="posts">

				<?php
						/*
						 * Since we called the_post() above, we need to rewind
						 * the loop back to the beginning that way we can run
						 * the loop properly, in full.
						 */
						rewind_posts();

						// Start the Loop.
						while ( have_posts() ) : the_post(); ?>

							<div class="post">
								<?php the_time('F jS, Y'); ?>
								<div class="post-content">
		            				<?php the_content(); ?>
								</div>

		           			</div>

						<?php endwhile; ?>
						<div class="navigation">
		 					<div class="alignleft"><?php previous_post(); ?></div>
				 			<div class="alignright"><?php next_post(); ?></div>
				 		</div>

					<?php else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

					endif;
				?>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

</div>

<?php
get_footer();
