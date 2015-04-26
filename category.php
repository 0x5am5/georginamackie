<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="content">

	<section id="primary" class="about">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h2 class="archive-title"><?php printf( __( 'Category Archives: %s' ), single_cat_title( '', false ) ); ?></h2>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->
			<div class="posts">
			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post(); ?>
					
					<div class="post">
						<h3><?php the_title(); ?></h3>

						<div class="post-content">
	            			<?php the_content(); ?>
	           			</div>
					</div>

					<?php endwhile; ?>
			</div>
					<div class="navigation">
	 					<div class="alignleft"><?php previous_post(); ?></div>
			 			<div class="alignright"><?php next_post(); ?></div>
			 		</div>

				<?php else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_footer();
