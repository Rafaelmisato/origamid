<?php

add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home() {
  new_cmb2_box([
  'id' => 'home_box',
  'title' => 'Home',
  'object_types' => ['page'],
  'show_on' => [
    'key' => 'page-template',
    'value' => 'page-home.php'
    ],
  ]);
}
?>