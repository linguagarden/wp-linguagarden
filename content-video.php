<?php
/**
 * The template used for displaying video content
 *
 * @package linguagarden2014
 */
?>
<section class="component videoplayer full-width">
	<div class="row collapse">
		<div class="columns small-12 medium-10 medium-centered">
			<header class="header">
				<h1><?php the_field('video_block_title'); ?></h1>
				<p><?php the_field('video_block_intro'); ?></p>
			</header>
		</div>
		<div class="columns small-12">
			<div class="content">
				<iframe width="853" height="480" src="<?php the_field('video_link'); ?>" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>