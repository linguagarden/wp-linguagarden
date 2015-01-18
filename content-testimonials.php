<?php
/**
 * The template used for displaying testimonials
 *
 * @package linguagarden
 */
?>

<section class="component testimonials">
	<div class="row collapse">
		<div class="columns small-11 medium-11 medium-centered">
			<header class="header">
				<h1><?php the_field('section_title'); ?></h1>
			</header>
		</div>
		<div class="columns small-10 medium-centered">
			<div class="content">
				<?php
					$post_objects = get_field('section_post_type');
 					if( $post_objects ): 
 				?>
				<ul class="testimonials-list small-block-grid-1">
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
						<li class="testimonial-item">
							<div class="panel radius">
								<div class="row">
									<div class="columns small-12 testimonial_quote">
								        <?php
								        	the_excerpt();
										?>
									</div>
									
								</div>
								<div class="row testimonial_meta">
									<div class="columns small-10">
										<p class="name"><strong><?php the_field('testimonials_block_name'); ?></strong></p>
										<p class="relationship"><em><?php the_field('testimonials_block_relationship'); ?></em></p>

									</div>
									<div class="columns small-2">
										<?php
											if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  												the_post_thumbnail(null, array('class' => 'avatar'));
											} 
										?>
									</div>
								</div>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
				 
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>