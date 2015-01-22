<?php
/**
 * @package linguagarden
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('component'); ?>>
    <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php linguagarden_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
    <div class="row collapse">
		<div class="columns small-11 medium-11 medium-centered">
        	<div class="entry-content">
        		<?php the_content(); ?>
        		<?php
        			wp_link_pages( array(
        				'before' => '<div class="page-links">' . __( 'Pages:', 'linguagarden' ),
        				'after'  => '</div>',
        			) );
        		?>
        	</div><!-- .entry-content -->
        
        	<footer class="entry-footer">
        		<?php linguagarden_entry_footer(); ?>
        	</footer><!-- .entry-footer -->
        </div>
    </div>
</article><!-- #post-## -->
