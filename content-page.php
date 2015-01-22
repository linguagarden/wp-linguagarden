<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package linguagarden
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('component'); ?>>
	<div class="row collapse">
		<div class="columns columns small-11 medium-11 medium-centered">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		</div>
	</div>
	<div class="row collapse">
    	<div class="columns columns small-11 medium-11 medium-centered">
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'linguagarden2014' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div>
	</div>
	<div class="row collapse">
    		<div class="columns columns small-11 medium-11 medium-centered">
				<footer class="entry-footer">
					<?php edit_post_link( __( 'Edit', 'linguagarden2014' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-footer -->
		</div>
	</div>
</article><!-- #post-## -->