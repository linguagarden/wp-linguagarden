<?php
/**
 * The template used for displaying Features & Benefits
 *
 * @package linguagarden
 */
?>

<section class="component features">
	<div class="row collapse">
		<div class="columns small-11 medium-centered">
			<header class="header">
				<h1><?php the_field('features_title'); ?></h1>
				<p><?php the_field('features_intro'); ?></p>
			</header>
		</div>
		<div class="columns small-11 medium-centered">
			<div class="content">
				<?php
					$post_objects = get_field('features_post_type');
 					if( $post_objects ): 
 				?>
				<ul class="feature-list small-block-grid-3">
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
					<li class="feature-item">
						<div class="row collapse">
							<div class="columns small-12 medium-3">
								<div class="icon">
									<?php
											if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  												the_post_thumbnail();
											} 
										?>
								</div>
							</div>
							<div class="columns small-12 medium-9">
								<h3><?php the_title(); ?></h3>
										<?php the_excerpt(); ?>
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