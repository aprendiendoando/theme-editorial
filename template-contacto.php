<?php
/*
Template Name: Contactanos
*/
?>

<?php
get_header();
?>

	<!-- Content -->
		<section class="red">
			<?php
	              while ( have_posts() ) : the_post();
	              ?>
	                  <header class="main">
	                    <h1><?php the_title(); ?></h1>
	                  </header>

	                  <span class="image main">
	                    <?php the_post_thumbnail( 'full' ); ?>
	                 </span>
	                 <?php the_content(); ?>
	              <?php
	              // End the loop.
	              endwhile;
	              ?>
		</section>
</div>
</div>
 <?php get_sidebar(); ?>
<?php get_footer(); ?>
</body>
</html>
