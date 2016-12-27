<?php
get_header();
?>

	<!-- Banner -->
	<section id="banner">
		<?php $query = new WP_Query( 'cat=2&posts_per_page=1' ); ?>
		<?php if ($query->have_posts()) : ?>
		<?php while ($query->have_posts()) : $query->the_post(); ?>
			<div class="content">
				<header>
					<h1><?php the_title(); ?></h1>
					<p>A free and fully responsive site template</p>
				</header>
				<p><?php the_excerpt(); ?></p>
				<ul class="actions">
					<li><a href="<?php the_permalink(); ?>" class="button big">Learn More</a></li>
				</ul>
			</div>
			<span class="image object">
				<?php the_post_thumbnail( 'full' ); ?>
			</span>
		<?php endwhile; ?>
		<?php else : ?>
			<?php echo "No hay entradas que cumplan su criterio"; ?>
		<?php endif; ?>
		<?php rewind_posts(); ?>
	</section>
	<!-- Section -->
	<section>
		<header class="major">
			<h2>Nuestros servicios</h2>
		</header>
		<div class="features">
			<?php $query = new WP_Query( 'cat=3&posts_per_page=2' ); ?>
			<?php if ($query->have_posts()) : ?>
				<?php while ($query->have_posts()) : $query->the_post(); ?>
				<?php // Individual Post Styling ?>
            	<article>
					<span class="icon fa-diamond"></span>
					<div class="content">
						<h3><?php the_title(); ?></h3>
						<p><?php the_excerpt(); ?></p>
					</div>
				</article>
				<?php endwhile; ?>
				<?php else : ?>
					<?php echo "No hay entradas que cumplan su criterio"; ?>
				<?php endif; ?>
				<?php rewind_posts(); ?>
		</div>
	</section>

<!-- Section -->
	<section>
		<header class="major">
			<h2>Blog</h2>
		</header>
		<div class="posts">
			<?php $query = new WP_Query( 'cat=4&posts_per_page=6' ); ?>
			<?php if ($query->have_posts()) : ?>
				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<article>
						<a href="<?php the_permalink(); ?>" class="image">
							<?php
							if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'medium' );
							}
							else{
							?>
							<img src="http://placehold.it/450x300" alt="">
							<?php
							}
							?>

						</a>
						<h3><?php the_title(); ?></h3>
						<p><?php the_excerpt(); ?></p>
						<ul class="actions">
							<li><a href="<?php the_permalink(); ?>" class="button">More</a></li>
						</ul>
					</article>
				<?php endwhile; ?>
				<?php // Navigation ?>
				<?php else : ?>
					<?php echo "No hay entradas que cumplan su criterio"; ?>
				<?php endif; ?>
				<?php rewind_posts(); ?>
	  	</div>
	</section>
</div>
</div>
	<?php get_sidebar(); ?> <!--Sidebar-->
    <?php get_footer(); ?>  <!--Footer-->
</div>
</body>
</html>
