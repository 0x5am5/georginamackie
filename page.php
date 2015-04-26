<?php get_header(); ?>

<div class="content">

	<?php while ( have_posts() ) : the_post(); ?>

   	<div class="about">
    	<h2 class="access"><?php echo get_the_title( $ID ); ?></h2>

      	<?php if (get_field('banner_image')) : ?>
			<div class="banner">
				<img src="<?php echo get_field('banner_image')['url']; ?>" alt="<?php echo get_field('banner_image')['title']; ?>" />
			</div>
		<?php endif; ?>

		<?php the_content(); ?>

	</div>

	<?php endwhile; ?>

</div>
	
<?php get_footer(); ?>
