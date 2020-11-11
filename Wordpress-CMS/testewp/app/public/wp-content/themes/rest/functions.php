<?php

  // Funções para Limpar o Header
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0 );
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'feed_links_extra', 3 );
  remove_action('wp_head', 'wp_generator' );

  // Habilitar Menus
  add_theme_support('menus');

  /**FIELDS CMB2 WP**/
  function get_field($key, $page_id = 0) {
    $id = $page_id !== 0 ? $page_id : get_the_ID();
  
    return get_post_meta($id, $key, true);
  }

  function the_field($key, $page_id = 0) {
    echo get_field($key, $page_id);
  }

  //fields SEO
  add_action('cmb2_admin_init', 'cmb2_fields_seo');
  function cmb2_fields_seo() {
    $cmb = new_cmb2_box([
      'id' => 'seo',
      'title' => 'SEO',
      'object_types' => ['page'],
      'show_on' => [
        'key' => 'page-template',
        'value' => ['page-home.php', 'page-contato.php', 'page-sobre.php']
      ],
    ]);

    $seo = $cmb->add_field([
      'name' => 'Titulo SEO',
      'id' => 'title_seo',
      'type' => 'text'
    ]);
    $seo = $cmb->add_field([
      'name' => 'Descrição SEO',
      'id' => 'description_seo',
      'type' => 'text'
    ]);
  }

  // fields page menu da semana
  // fields peixes
  add_action('cmb2_admin_init', 'cmb2_fields_home');
  function cmb2_fields_home() {
    $cmb = new_cmb2_box([
      'id' => 'home_box',
      'title' => 'Menu da Semana Peixes',
      'object_types' => ['page'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-home.php'
      ],
    ]);

    $pratos = $cmb->add_field([
      'name' => 'Pratos',
      'id' => 'pratos',
      'type' => 'group',
      'repeatable' => true,
      'options' => [
        'group_title' => 'Prato {#}',
        'add_button' => 'Adicionar',
        'sortable' => true,
      ]
    ]);

    $cmb->add_group_field($pratos, [
      'name' => 'Nome',
      'id' => 'nome',
      'type' => 'text',
    ]);
    $cmb->add_group_field($pratos, [
      'name' => 'Descrição',
      'id' => 'descricao',
      'type' => 'text',
    ]);
    $cmb->add_group_field($pratos, [
      'name' => 'Preço',
      'id' => 'preco',
      'type' => 'text',
    ]);
  }

  //fields carnes
  add_action('cmb2_admin_init', 'cmb2_fields_home2');
  function cmb2_fields_home2() {
    $cmb = new_cmb2_box([
      'id' => 'home_box2',
      'title' => 'Menu da Semana Carnes',
      'object_types' => ['page'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-home.php'
      ],
    ]);

    $carnes = $cmb->add_field([
      'name' => 'Pratos',
      'id' => 'carnes',
      'type' => 'group',
      'repeatable' => true,
      'options' => [
        'group_title' => 'Prato {#}',
        'add_button' => 'Adicionar',
        'sortable' => true,
      ]
    ]);

    $cmb->add_group_field($carnes, [
      'name' => 'Nome',
      'id' => 'nome',
      'type' => 'text',
    ]);
    $cmb->add_group_field($carnes, [
      'name' => 'Descrição',
      'id' => 'descricao',
      'type' => 'text',
    ]);
    $cmb->add_group_field($carnes, [
      'name' => 'Preço',
      'id' => 'preco',
      'type' => 'text',
    ]);
  }

  //fields page sobre
  add_action('cmb2_admin_init', 'cmb2_img_sobre');
  function cmb2_img_sobre() {
    $cmb = new_cmb2_box([
      'id' => 'img_box',
      'title' => 'Imagem',
      'object_types' => ['page'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-sobre.php'
      ],
    ]);

    $cmb->add_field([
      'name' => 'Imagem',
      'id' => 'img_sobre',
      'type' => 'file',
      'options' => [
        'url' => false,
      ]
    ]);
    $cmb->add_field([
      'name' => 'Descrição',
      'id' => 'img_alt',
      'type' => 'text',
    ]);
    }

  add_action('cmb2_admin_init', 'cmb2_fields_sobre');
  function cmb2_fields_sobre() {
    $cmb = new_cmb2_box([
      'id' => 'sobre_box',
      'title' => 'Sobre',
      'object_types' => ['page'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-sobre.php'
      ],
    ]);

    $sobre = $cmb->add_field([
      'name' => 'Sobre',
      'id' => 'sobre',
      'type' => 'group',
      'repeatable' => true,
      'options' => [
        'add_button' => 'Adicionar',
        'sortable' => true,
      ]
    ]);

    $cmb->add_group_field($sobre, [
      'name' => 'Título',
      'id' => 'titulo',
      'type' => 'text',
    ]);
    $cmb->add_group_field($sobre, [
      'name' => 'Descrição',
      'id' => 'descricao',
      'type' => 'textarea',
    ]);
  }

  //fields page contato
  add_action('cmb2_admin_init', 'cmb2_fields_contato');
  function cmb2_fields_contato() {
    $cmb = new_cmb2_box([
      'id' => 'contato_box',
      'title' => 'Contato',
      'object_types' => ['page'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-contato.php'
      ],
    ]);

    $cmb->add_field([
      'name' => 'Imagem',
      'id' => 'imagem_mapa',
      'type' => 'file',
      'options' => [
        'url' => false,
      ]
    ]);
    $cmb->add_field([
      'name' => 'Link do mapa',
      'id' => 'link_mapa',
      'type' => 'text',
    ]);
  }
?>