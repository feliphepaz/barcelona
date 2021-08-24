<?php

add_theme_support( 'post-thumbnails' );

function barcelona_scripts() {
  wp_register_script('script', get_template_directory_uri() . '/script.js', [], false, true);
  wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'barcelona_scripts');

add_action('cmb2_admin_init', 'home_box');

function home_box() {
  $cmb = new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Próxima partida',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ]
  ]);

  $cmb->add_field([
    'name' => 'Adversário',
    'id' => 'adversario',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Data do jogo',
    'id' => 'data',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Horário do jogo',
    'id' => 'horario',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'O jogo é dentro ou fora de casa?',
    'id' => 'casa',
    'type' => 'select',
    'options' => [
      'dentro' => __( 'Dentro', 'cmb2' ),
      'fora'   => __( 'Fora', 'cmb2' ),
    ]
  ]);

  $cmb->add_field([
    'name' => 'Nome do estádio',
    'id' => 'estadio',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Nome do campeonato',
    'id' => 'campeonato',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Link para a compra de ingressos',
    'id' => 'link',
    'type' => 'text_url',
  ]);
}

?>