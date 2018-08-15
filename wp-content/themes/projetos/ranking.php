<div class="presidente-da-semana">
	<div class="presidente-da-semana__estrela"><img src="<?php echo get_theme_file_uri('assets/images/icones/estrela.svg'); ?>" alt=""></div>
	<h3 class="presidente-da-semana__title sidebar__title">Presidente da Semana</h3>
	<?php $presidenteQuery = new WP_Query(array(
			'post_type' => 'presidente',
			'posts_per_page' => 1)); ?>
	<?php  while($presidenteQuery->have_posts()): $presidenteQuery->the_post();
			$presida = get_field('presidente_da_semana');
			if( $posts ): ?>
				<?php foreach( $presida as $p ): // variable must NOT be called $post (IMPORTANT) ?>
					<div class="presidente-da-semana__img"><?php echo get_the_post_thumbnail( $p->ID ); ?></div>
				    <p class="presidente-da-semana__subtitle"><a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a></p>
				<?php endforeach;
				 endif;
			 endwhile; wp_reset_query();?>
</div> <!-- presidente da semana -->

<!-- ANIVERSARIANTES DO MES -->
<?php
	$today = date('m');
	$aniversarioQuery = new WP_Query(array(
		'post_type' => 'pessoas',
		'posts_per_page' => -1,
		'meta_query' => array(
		array(
	        'key'		=> 'aniversario',
	        'compare'	=> '>=',
	        'value'		=> '1/' . $today
	    ),
	    array(
	        'key'		=> 'aniversario',
	        'compare'	=> '<=',
	        'value'		=> '31/' . $today
	    )) //fim do query
)); ?>
<?php if($aniversarioQuery->have_posts()) : ?>
	<?php print_r($aniverioMonth) ?>
	<div class="aniversariantes-do-mes">
		<h3 class="aniversariantes-do-mes__title sidebar__title">Aniversariantes do mês</h3>
<?php while($aniversarioQuery->have_posts()) : $aniversarioQuery->the_post(); ?>
	<?php $data = get_field('aniversario', false, false);
		$data = new Datetime($data);
	 ?>
	<div class="aniversariantes-do-mes__aniversario">
		<div class="aniversariantes-do-mes__data">
			<p class="aniversariantes-do-mes__aniversario--data"><?php echo $data->format('d'); ?></p>
			<p class="aniversariantes-do-mes__aniversario--mes"><?php echo $data->format('M'); ?></p>
		</div>
		<a href="" class="aniversariantes-do-mes__aniversariante"><?php the_title(); ?></a>
	</div>
<?php endwhile; ?>
	</div> <!-- aniversariantes-do-mes -->
<?php endif; wp_reset_query(); ?>

<!-- RANKING DE GP -->
<div class="pessoas">
	<h3 class="pessoas__title sidebar__title">Ranking de GP</h3>
	<div class="pessoas__single">
		<h4>Estão inspirando</h4>
		<ul>
		<?php $pessoasQuery = new WP_Query(array(
			'post_type' => 'ranking',
			'posts_per_page' => -1,
			'p' => 39
			));
			while($pessoasQuery->have_posts()) : $pessoasQuery->the_post();
			$ranking = get_field('ranking');
			if( $posts ): ?>
				<?php foreach( $ranking as $p ): // variable must NOT be called $post (IMPORTANT) ?>
				    <li><a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a></li>
				<?php endforeach;
				 endif;
		 endwhile;
		wp_reset_query(); ?>
		</ul>
	</div><!--  pessoas single -->

	<div class="pessoas__single">
		<h4>Elaborianos normais</h4>
		<ul>
		<?php $pessoasQuery = new WP_Query(array(
			'post_type' => 'ranking',
			'posts_per_page' => -1,
			'p' => 40
			));
			while($pessoasQuery->have_posts()) : $pessoasQuery->the_post();
			$ranking = get_field('ranking');
			if( $posts ): ?>
				<?php foreach( $ranking as $p ): // variable must NOT be called $post (IMPORTANT) ?>
				    <li><a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a></li>
				<?php endforeach;
				 endif;
		 endwhile;
		wp_reset_query(); ?>
		</ul>
	</div><!--  pessoas single -->
</div><!-- pessoas -->