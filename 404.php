<?php
/*
*Template Name: Index
*Use: This is used when no page is associated with a url
*/
get_header(); ?>
  <?php get_header('secondary'); ?>
  <?php get_header('primary'); ?>
	<div class="container">
		<div class="row py-5">
			<div class="col-12 col-md-8 offset-md-2 text-center">
				<h1>404</h1>
			</div>
		</div>
	</div>
	</body>
  <?php get_footer('primary'); ?>
  <?php get_footer('copyright'); ?>
  <?php get_footer(); ?>
</html>
