<?php
function devcode_style_script()
{
  wp_enqueue_style( 'miestilo', get_template_directory_uri() . '/assets/css/main.css', array() ,'1.0.0' , 'all' );
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js', array ( 'jquery' ), '3.0.1', true);
  wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js', array ( 'jquery' ), '1.0.0', true);
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), '3.0.0', true);
}

add_action( 'wp_enqueue_scripts', devcode_style_script);
// add_action('nombre del hook','mi función');


// Agregar soporte a las imagenes destacadas

add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );


// Agregar soporte para menus

function devcode_theme_setup()
{
  add_theme_support('menus');
  register_nav_menus( array(
  	'primary' => 'Mi Menú Principal',
  	'secondary' => 'Mi Menú Secundario',
  ) );
}

add_action('init','devcode_theme_setup');

// Agregar Sidebar

function devcode_widget()
{
  $args = array(
  	'name'          => 'Sidebar Left',
  	'id'            => 'sidebar-left',
  	'description'   => 'Este sidebar esta al lado izquierdo',
    'class'         => '',
  	'before_widget' => '<span id="%1$s" class="widget %2$s">',
  	'after_widget'  => '</span>',
  	'before_title'  => '<h2 class="widgettitle">',
  	'after_title'   => '</h2>' );

    register_sidebar( $args );
}

add_action('widgets_init','devcode_widget');

// Solucionar problema de la navegacion desde el category.php
?>
