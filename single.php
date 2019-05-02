<?php
/*
*Template Name: Post
*Use: This is used for individual posts
*/
get_header(); ?>
  <?php get_header('secondary'); ?>
  <?php get_header('primary'); ?>
    <!-- WP Loop Begin -->
		<?php if ( have_posts() ) { while ( have_posts() ) : the_post(); ?>
		  <?php the_content(); ?>
		<?php endwhile;
		}; ?>
	</body>
  <?php get_footer('primary'); ?>
  <?php get_footer('copyright'); ?>
  <?php get_footer(); ?>
</html>
