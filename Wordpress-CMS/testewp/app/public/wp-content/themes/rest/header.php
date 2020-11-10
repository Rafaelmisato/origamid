<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?> | <?php wp_title('') ?> O melhor restaurante de copacabana, carnes peixes e massas</title>
  <meta name="description" content="O melhor restaurante de copacabana">

  <link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <?php wp_head(); ?>
</head>

<body>

  <header>
    <nav>
      <ul>
        <li class="current_page_item"><a href="/">Menu</a></li>
        <li><a href="/sobre/">Sobre</a></li>
        <li><a href="/contato">Contato</a></li>
      </ul>
    </nav>

    <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>

    <p>Rua Marechal 29 – Copacabana – Rj</p>
    <p class="telefone">2422-9201</p>
  </header>