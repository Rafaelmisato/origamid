<?php
// Template Name: Sobre
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src="<?php the_field('img_sobre'); ?>" alt="<?php the_field('img_alt'); ?>">
			</div>

			<div class="grid-8">
				<?php
				$sobre = get_field('sobre');
				if (isset($sobre)) {
					foreach ($sobre as $sob) {
				?>
						<h2><?php echo $sob['titulo']; ?></h2>
						<p><?php echo $sob['descricao']; ?></p>
				<?php }
				} ?>

			</div>
		</section>
<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>