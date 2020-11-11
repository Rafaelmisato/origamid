<footer>
  <nav class="nav-footer">
  <?php 
      $args = array(
        'menu' => 'principal',
        'container' => false
      );
      wp_nav_menu( $args );
     ?>
  </nav>

  <p>Rest © <?php echo date("Y"); ?>. Todos os direitos reservados.</p>
</footer>

<?php wp_footer(); ?>
</body>

</html>
<!-- test -->