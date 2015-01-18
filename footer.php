<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package linguagarden
 */
?>
                </div>
                <footer class="sitefooter">
    				<div class="row">
    					<div class="columns small-12 medium-3">
    						<div class="sitelogo">
    							<?php 
    							    $footer_logo = get_theme_mod('footer-logo');
    							    if ($footer_logo == false) {
    							        $footer_logo = get_theme_mod('logo');
    							    }
    							 ?>
    							<img src="<?php echo $footer_logo ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
    						</div>
    					</div>
    					<div class="columns small-12 medium-6">
    						<ul class="contactlinks inline-list right">
    							<li class="phone">(309) 361-2615</li>
    							<li class="email"><a href="mailto:denise@linguagarden.com">denise@linguagarden.com</a></li>
    							<li class="sociallink facebook"><a href="https://www.facebook.com/linguagardenlearningcenter" target="_blank">Facebook</a></li>
    							<li class="sociallink twitter"><a href="https://twitter.com/LinguaGarden" target="_blank">Twitter</a></li>
    						</ul>
    					</div>
    				</div>
    			</footer>
    		</div>
    	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
