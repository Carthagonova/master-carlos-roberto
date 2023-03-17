<?php
$plantillas = __DIR__ .'/plantillas/';
$terms = get_queried_object();


function tresposts(){
    $plantillas = __DIR__ .'/plantillas/';
    include $plantillas .'trespost.php';
}
add_shortcode('lastest_posts', 'tresposts');



function descripcion_cat() {

  return 'vamoos';
  return '<style>section#articulos {display: none;}</style>';



  }
  // Register shortcode echo do_shortcode('[cat_descripcion]');
  add_shortcode('cat_descripcion', 'descripcion_cat');
?>
