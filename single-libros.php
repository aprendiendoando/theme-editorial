<?php
get_header();
?>
<!-- Content -->
	<section>
	<?php
      while ( have_posts() ) : the_post();
      ?>
          <header class="main">
            <h1><?php the_title(); ?></h1>
          </header>

          <span class="image main">
            <?php the_post_thumbnail( 'full' ); ?>
         </span>
			 <?php
				if(get_field('dni') || get_field('autor'))
				{
						?>
						<p>
						 <h4>Datos Relacionados</h4>
						 <strong>DNI:</strong> <?php the_field('dni') ?> <br>
						 <strong>Autor:</strong> <?php the_field('autor') ?>
					 </p>
						<?php
				}
			?>
			<?php the_content(); ?>
      		<?php
          		// End the loop.
          	endwhile;
          	?>
	</section>
	<!-- Comentarios -->
    <hr>
	<?php if (comments_open()): ?>
		<?php comments_template(); ?>
	<?php else: ?>
		<?php echo '<h5>No estan habilitados los comentarios para esta entrada</h5>'; ?>
	<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
	</body>
</html>
