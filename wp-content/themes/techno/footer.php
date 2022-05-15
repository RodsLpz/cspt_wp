<?php
/**
 * @package ceylonthemes
 * @subpackage eCommerce Plus
 * @since 1.0.0
 */
    $techno_options = ecommerce_plus_get_theme_options();
	$copyright_text = $techno_options['copyright_text'];

if (class_exists('WooCommerce') && is_shop()) {

?>

<section id="after-shop-page">
	<div>
		<?php
			
		$techno_args = array( 'post_type' => 'page', 'ignore_sticky_posts' => 1 , 'post__in' => array($techno_options['after_shop']));
		$techno_result = new WP_Query($techno_args);
		while ( $techno_result->have_posts() ) :
			$techno_result->the_post();
			the_content();
		endwhile;
		wp_reset_postdata();

		?>
	</div>
</section>

<?php
}
?>
</div><!-- #content -->
	
<footer id="colophon" class="site-footer" role="contentinfo" style="background-color:<?php echo esc_attr($techno_options['footer_bg_color']); ?>;background-image:url('<?php echo esc_attr($techno_options['footer_image']); ?>')" >

	<div class="container">
		<div class="row">
			<?php require get_template_directory() . '/inc/footer-widgets.php' ;?>		
		</div>		
	</div>


	<div class="site-info">
	
		<div class="container">


		<div class="row">
		<div class="col-sm-12 col-xs-12"> 
        <span>
        	<?php 
				if (!class_exists('Ecommerce_Pro_Plugin')) {
        			echo '<a href="https://ceylonthemes.com">'.ecommerce_plus_santize_allowed_html( $copyright_text ).'</a>'; 
				} else {
					echo '<span>'.ecommerce_plus_santize_allowed_html( $copyright_text ).'</span>';
				}
			?>
    	</span>
		</div>
		
		</div>
		
		</div><!-- .container -->
    </div><!-- .site-info -->


		<?php
		if ( true === $techno_options['scroll_top_visible'] ) :
		?><div class="backtotop"><?php echo ecommerce_plus_get_svg( array( 'icon' => 'up' ) ); ?></div>
		<?php endif; ?>

		</footer>
		<div class="popup-overlay"></div>
		
		
<?php wp_footer(); ?>

</body>
</html>
