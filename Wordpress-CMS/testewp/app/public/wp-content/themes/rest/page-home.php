<?php
// Template Name: Menu da Semana
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="menu-item grid-8">
				<h2>Peixes</h2>
				<ul>
					<?php 
						$pratos = get_field('pratos');
						if(isset($pratos)) { foreach($pratos as $prato) {
					?>
						<li>
							<span><sup>R$</sup><?php echo $prato['preco']; ?></span>
							<div>
								<h3><?php echo $prato['nome']; ?></h3>
								<p><?php echo $prato['descricao']; ?></p>
							</div>
						</li>
						<?php } } ?>
				</ul>
			</div>

			<div class="menu-item grid-8">
				<h2>Carnes</h2>
				<ul>
				<?php 
						$carnes = get_field('carnes');
						if(isset($carnes)) { foreach($carnes as $prato) {
					?>
						<li>
							<span><sup>R$</sup><?php echo $prato['preco']; ?></span>
							<div>
								<h3><?php echo $prato['nome']; ?></h3>
								<p><?php echo $prato['descricao']; ?></p>
							</div>
						</li>
						<?php } } ?>
				</ul>
			</div>
		</section>
<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>