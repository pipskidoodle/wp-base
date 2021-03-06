<?php
/*
*Template Name: Index
*Use: This is used for blog posts, or when a file doesn't exist
*/
get_header(); ?>
  <?php get_header('secondary'); ?>
  <?php get_header('primary'); ?>
	<div class="container">
		<div class="row py-5">
			<div class="col-12 col-md-8 offset-md-2">
        <!-- WP Loop Begin -->
				<?php if ( have_posts() ) { while ( have_posts() ) : the_post(); ?>
				  <?php the_content(); ?>
				<?php endwhile;
				}; ?>
			</div>
		</div>
	</div>
	</body>
  <?php get_footer('primary'); ?>
  <?php get_footer('copyright'); ?>
  <?php get_footer(); ?>
</html>
