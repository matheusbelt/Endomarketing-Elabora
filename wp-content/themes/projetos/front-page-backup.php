<?php get_header(); ?>

<main>
	<div class="container">
		<section class="col-sm-9 projeto">	
			<?php $projetosQuery = new WP_Query(array(
				'post_type' => 'projetos',
				'posts_per_page' => 5,
				'meta_key' => 'efetividade_do_projeto',
				'orderby' => 'meta_value',
				'order' => 'ASC',
				));

			while($projetosQuery->have_posts()) : $projetosQuery->the_post();
			?>

			<article class="projeto__single projeto__single-<?php echo get_the_ID(); ?> wow animated bounceInLeft">
				<style>
						<?php
							$efetividade = get_field('efetividade_do_projeto', get_the_ID());
							if($efetividade > 70){
								echo '.id-' . get_the_ID() . '{background-color:green;}';
								echo '.projeto__single-' . get_the_ID() . '{border-left: 5px solid green;}';
							}
							if($efetividade <= 70 AND $efetividade > 30){
								echo '.id-' . get_the_ID() . '{background-color:yellow;}';
								echo '.projeto__single-' . get_the_ID() . '{border-left: 5px solid yellow;}';
							}
							if($efetividade < 30){
								echo '.id-' . get_the_ID() . '{background-color:red;}';
								echo '.projeto__single-' . get_the_ID() . '{border-left: 5px solid red;}';
							}
						?>
							.projeto__single-<?php echo get_the_ID(); ?> .progress-bar__progress--animate{
								width: <?php echo $efetividade; ?>%;
							}
					</style>
				<div class="progress-bar">
					<h4 class="progress-bar__title">Efetividade do projeto:</h4><p class="text-right progress-bar__percentage"><?php echo get_field('efetividade_do_projeto');?>%</p>
					<div class="progress-bar__progress  id-<?php echo get_the_ID(); ?>"></div>
				</div>
				
				<h1><?php the_title(); ?></h1>
				<div class="projeto__content"><?php the_content(); ?>
					
					
					<h4>Equipe</h4>

					<?php 

					$posts = get_field('membros');
					if( $posts ): ?>
						<ul>
						<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
						    <li>
						    	<a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
						    </li>
						<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div> <!-- projetos__content -->
			</article> <!-- projetos__single -->
		<?php endwhile;
		wp_reset_query();
		 ?>
		</section> <!-- fim da section projetos -->


		<div class="col-sm-3 pessoas">
				<div class="pessoas__single">
				<h2 class="top5">Top 5 <img class="star" src="<?php echo get_theme_file_uri('/assets/images/star.svg'); ?>" alt=""></h2>
				<ul>
				<?php $pessoasQuery = new WP_Query(array(
					'post_type' => 'pessoas',
					'posts_per_page' => -1,
					'meta_key' => 'top5',
					'orderby' => 'meta_value',
					'order' => 'ASC',
					'meta_query' => array(
				      array(
				        'key' => 'top5',
				        'compare' => '=',
				        'value' => 1,
				        'type' => 'num'
				      )
				    ),
					));

					while($pessoasQuery->have_posts()) : $pessoasQuery->the_post();
				?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				
				<?php endwhile;
				wp_reset_query(); ?>
				</ul>
			</div><!--  pessoas single -->

			<div class="pessoas__single">
				<h2 class="acima-da-media">Acima da Média</h2>
				<ul>
				<?php $pessoasQuery = new WP_Query(array(
					'post_type' => 'pessoas',
					'posts_per_page' => -1,
					'meta_key' => 'acima_da_media',
					'orderby' => 'meta_value',
					'order' => 'ASC',
					'meta_query' => array(
				      array(
				        'key' => 'acima_da_media',
				        'compare' => '=',
				        'value' => 1,
				        'type' => 'num'
				      )
				    ),
					));

					while($pessoasQuery->have_posts()) : $pessoasQuery->the_post();
				?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				
				<?php endwhile;
				wp_reset_query(); ?>
				</ul>
			</div><!--  pessoas single -->


			<div class="pessoas__single">
				<h2 class="media">Na Média</h2>
				<ul>
				<?php $pessoasQuery = new WP_Query(array(
					'post_type' => 'pessoas',
					'posts_per_page' => -1,
					'meta_key' => 'media',
					'orderby' => 'meta_value',
					'order' => 'ASC',
					'meta_query' => array(
				      array(
				        'key' => 'media',
				        'compare' => '=',
				        'value' => 1,
				        'type' => 'num'
				      )
				    ),
					));

					while($pessoasQuery->have_posts()) : $pessoasQuery->the_post();
				?>					
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				
				<?php endwhile;
				wp_reset_query(); ?>
				</ul>
			</div><!--  pessoas single -->

			
			<div class="pessoas__single">
				<h2 class="abaixo-da-media">Abaixo da Média</h2>
				<ul>
				<?php $pessoasQuery = new WP_Query(array(
					'post_type' => 'pessoas',
					'posts_per_page' => -1,
					'meta_key' => 'abaixo_da_media',
					'orderby' => 'meta_value',
					'order' => 'ASC',
					'meta_query' => array(
				      array(
				        'key' => 'abaixo_da_media',
				        'compare' => '=',
				        'value' => 1,
				        'type' => 'num'
				      )
				    ),
					));

					while($pessoasQuery->have_posts()) : $pessoasQuery->the_post();
				?>
					
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				
				<?php endwhile;
				wp_reset_query(); ?>		
			</ul>
		</div><!--  pessoas single -->
		</div>
	</div>
</main>

<?php get_footer(); ?>