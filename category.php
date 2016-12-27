<?php
get_header();
?>
		<section>
			<header class="major">
				<h2><?php single_cat_title(); ?></h2>
			</header>
			<div class="posts">
		  		<?php
					$id_categoria = get_query_var('cat' );
					$categories = get_the_category();
		            $category_id = $categories[0]->name;
		            echo do_shortcode('[ajax_load_more
			                              button_label="Ver Más"
			                              container_type="div"
			                              transition_container="false"
			                              post_type="post"
			                              posts_per_page="2"
			                              category="'.$category_id.'"
			                              transition="fade"]')
				?>
		  	</div>
		</section><!-- Section -->
	</div>
</div>
	<?php get_sidebar(); ?> <!--Sidebar-->
    <?php get_footer(); ?>  <!--Footer-->
</div>
</body>
</html>
