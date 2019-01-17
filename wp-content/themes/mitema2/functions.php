<?php

//REGISTRO DE ESTILOS

function register_enqueue_style(){
  $theme_data = wp_get_theme();
  /* registrando estilos */
  wp_register_style ('bootstrap',
get_parent_theme_file_uri( /*'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css'*/ '/assets/vendor/bootstrap/css/bootstrap.min.css'), null,
  '1.0.0', 'screen');
  wp_register_style ('fontawesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', null,
  '1.0.0', 'screen');
  wp_register_style ('googleFonts', 'https://fonts.googleapis.com/css?family=Lato');
  wp_register_style ('style',
  get_parent_theme_file_uri ('/assets/css/style.css'), 'screen');

/* enqueue stilos */

  wp_enqueue_style('bootstrap');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('googleFonts');
  wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'register_enqueue_style' );

//registro de wp_enqueue_scripts
function register_enqueue_scripts(){

  $theme_data = wp_get_theme();
  /* Deregister scripts */
  wp_deregister_script('jquery');
  wp_deregister_script('jquery-migrate');

  /*registrando scripts*/
  wp_register_script('jQuery3',
  get_parent_theme_file_uri (/*'https://code.jquery.com/jquery-3.3.1.min.js'*/'/assets/vendor/jquery/jquery.min.js'),
  array ('jQuery3'), '3.0.0', true);
  wp_register_script('bootstrap',
get_parent_theme_file_uri(/*'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js'*/'/assets/vendor/bootstrap/js/bootstrap.min.js'), array('jQuery_migrate'), null, true);

  /*enqueue script*/

  wp_enqueue_script('bootstrap');
}
  add_action('wp_enqueue_scripts', 'register_enqueue_scripts');

 ?>
