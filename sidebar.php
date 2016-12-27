<!-- Sidebar -->
<div id="sidebar">
  <div class="inner">
    <!-- Search -->
      <section id="search" class="alt">
          <?php get_search_form(); ?>
      </section>
      <?php
        if (is_single( array( 45, 43) ) ) {
      ?>
      <section>
        <h1>Yan Arlex Vallejo</h1>
      </section>
      <?php
        }
      ?>
    <!-- Menu -->
      <nav id="menu">
        <header class="major">
          <h2>Menu</h2>
        </header>
        <?php
          wp_nav_menu( array(
            'menu'           => 'Mi Menú Principal', // Do not fall back to first non-empty menu.
            'theme_location' => 'primary',
            'container' => '<ul>'

            ) );
          ?>
      </nav>
    <!-- Section -->
    <?php
      if (is_home()) {
    ?>
    <section>
      <header class="major">
        <h2>Libros Recomendados</h2>
      </header>
      <div class="mini-posts">
         <?php
          query_posts(array(
               "post_type" => 'libros',
               'showposts' => 3
              ));
        ?>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
        <article>
          <a href="<?php the_permalink(); ?>" class="image">
            <?php
              if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'medium' );
              }
              else{
              ?>
              <img src="https://static.pexels.com/photos/237904/pexels-photo-237904.jpeg" alt="">
              <?php
              }
              ?>
          </a>
          <p><?php the_excerpt(); ?></p>
        </article>
        <?php endwhile; ?>

        <?php // Navigation ?>

        <?php else : ?>

        <?php echo "No hay entradas que cumplan su criterio"; ?>

    <?php endif; ?>
    <?php rewind_posts(); ?>
      </div>
      <ul class="actions">
        <li><a href="#" class="button">More</a></li>
      </ul>
    </section>
    <?php
      }
    ?>
 <!-- Seccion que solo abre en un single determinado -->
   <!-- Section -->
      <section>
        <header class="major">
          <h2>Get in touch</h2>
        </header>
        <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
        <ul class="contact">
          <li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
          <li class="fa-phone">(000) 000-0000</li>
          <li class="fa-home">1234 Somewhere Road #8254<br />
          Nashville, TN 00000-0000</li>
        </ul>
      </section>

    <!-- Footer -->
      <footer id="footer">
        <p class="copyright">
          <?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
              <?php dynamic_sidebar( 'sidebar-left' ); ?>
          <?php endif; ?>
        </p>
      </footer>
 </div>
</div>
