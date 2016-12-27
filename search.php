<?php
get_header();
?>
  <!-- Content -->
			<section>
				<?php $query = new WP_Query( 'posts_per_page=1' ); ?>
				<?php if ($query->have_posts()) : ?>
        <header class="page-header">
    				<h5 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h5>
    		</header><!-- .page-header -->
        <?php while ($query->have_posts()) : $query->the_post(); ?>
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
				<?php
        else :
      			echo "No existen busquedas con esta palabra clave";
        endif;
        ?>
      </section>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</body>
</html>
