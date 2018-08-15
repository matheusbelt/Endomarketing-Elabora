<?php get_header(); ?>

<main>
	<section class="meta container-fluid">
		<div class="container" style="position: relative;">
			<div class="col-sm-8">
				<h1 class="meta__title">Seja sua melhor versão</h1>
				<h2 class="meta__subtitle">Trabalhando diariamente para amplificar as boas vozes</h2>

				<div class="meta-progress meta-anual">
					<h3 class="meta-progress__title">Meta anual</h3>
					<div class="progress-bar">
						<div class="progress-bar__progress  id-<?php echo get_the_ID(); ?>"></div>
						<div class="meta-progress__icone">
							<?php get_template_part('assets/images/icones/foguete-svg'); ?>
						</div>
					</div> <!-- progress bar -->
				</div> <!-- meta anual -->

				<div class="meta-progress meta-mensal">
					<h3 class="meta-progress__title">Meta mensal</h3>
					<div class="progress-bar">
						<div class="progress-bar__progress  id-<?php echo get_the_ID(); ?>"></div>
						<div class="meta-progress__icone">
							<?php get_template_part('assets/images/icones/pizza-svg'); ?>
						</div>
					</div> <!-- progress bar -->
				</div> <!-- meta mensal -->
			</div> <!-- col sm 9 -->

			<div class="bigger-padding sidebar__position">
				<aside class="sidebar">
					<?php get_template_part('ranking'); ?>
				</aside>
			</div> <!-- pessoas -->
		</div> <!-- container -->
	</section> <!-- meta -->

	<section class="membros-mais-produtivos">
		<div class="container">
			<div class="col-sm-8">
				<h2 class="membros-mais-produtivos__title main__title">Membros mais produtivos do mês <?php echo $matheusBeltrao; ?></h2>
				<?php $produtividadeQuery = new WP_Query(array(
					'post_type' => 'atividades',
					'posts_per_page' => 3
				));
					if($produtividadeQuery->have_posts()) :
						while($produtividadeQuery->have_posts()) : $produtividadeQuery->the_post();?>
				<?php endwhile; endif; wp_reset_query();
				 ?>
			</div>
		</div> <!-- container -->
	</section> <!-- membros mais produtivos -->

	<section class="atividades">
		<div class="container">
			<div class="col-sm-8">
				<h2 class="atividades__title main__title">Últimas Atividades</h2>
					<?php
					$ativididadesQuery = new WP_Query(array(
						'post_type' => 'atividades',
						'posts_per_page' => 8,
						'meta_key' => 'data',
						'orderby' => 'meta_value_num',
						'order' => 'DESC'
					));

					if($ativididadesQuery->have_posts()) :
					while($ativididadesQuery->have_posts()) : $ativididadesQuery->the_post();
					?>
				<div class="atividades-gerais col-sm-3">
					<div class="atividades-gerais__single">
						<p class="atividades-gerais__single--data"><?php the_field('data'); ?></p>
						<h3 class="atividades-gerais__single--title"><?php the_title(); ?></h3>
						<?php $pessoas = get_field('pessoas');
							if($pessoas) :
								foreach ($pessoas as $p) :
						?>
						<a href="<?php echo get_permalink( $p->ID ) ?>" class="atividades-gerais__single--link"><?php echo get_the_title( $p->ID ) ?></a>
					<?php endforeach; endif; ?>
					</div> <!-- atividades gerais single -->
				</div><!-- atividades gerais -->
				<?php endwhile; endif; wp_reset_query(); ?>
			</div> <!-- col-sm-8 -->
		</div> <!-- container -->
	</section> <!-- atividades -->

</main>

<?php get_footer(); ?>