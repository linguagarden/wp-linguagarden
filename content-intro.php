<?php
/**
 * The template used for displaying intro content
 *
 * @package linguagarden
 */
?>
<section class="intro component">
	<?php $bg_img = get_field('intro_block_bg_img'); ?>
	<div class="row small-collapse" style="background: url(<?php echo $bg_img['sizes']['large']; ?>) no-repeat bottom center; background-size: 100%;">
		<div class="columns small-12">
			<div class="content">
    			<div class="row small-collapse">
    				<div class="columns small-12 medium-5 medium-offset-6">
    					<div class="messagebox">
    						<div class="content">
    							
    							<?php if ( dynamic_sidebar('intro-cta') ) : else : endif; ?>
    
    						</div>
    					</div>
    				</div>
    			</div>
			</div>
		</div>
	</div>
</section>