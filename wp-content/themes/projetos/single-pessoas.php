<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
		<?php
		$doctors = get_posts(array(
							'post_type' => 'atividades',
							'meta_query' => array(
								array(
									'key' => 'pessoas', // name of custom field
									'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								)
							)
						));
		 ?>
		 <?php $matheusBeltrao = 0;
		 global $matheusBeltrao; ?>
		 <?php if( $doctors ): ?>
							<ul>
							<?php foreach( $doctors as $doctor ): ?>
								<?php $matheusBeltrao += 1; ?>
								<li>
									<a href="<?php echo get_permalink( $doctor->ID ); ?>">
										<?php echo get_the_title( $doctor->ID ); ?>
									</a> <?php echo $matheusBeltrao; ?>
								</li>
							<?php endforeach; ?>
							</ul>
						<?php endif; ?>
						<p>oi<?php echo $matheusBeltrao; ?></p>
		<main id="content" class="<?php echo odin_classes_page_sidebar(); ?>" tabindex="-1" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			?>
		</main><!-- #main -->

<?php
get_sidebar();
get_footer();
