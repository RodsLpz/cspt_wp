<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url(get_bloginfo( 'pingback_url' )); ?>">
<?php endif;
wp_head();
$techno_options  = ecommerce_plus_get_theme_options(); 
?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'techno' ); ?></a>
<div class="menu-overlay"></div>


	<header id="masthead" class="site-header <?php echo esc_attr(ecommerce_plus_get_header_style()); ?>" role="banner">
	
	<?php if (isset($techno_options['countdown_enable']) && $techno_options['countdown_enable']): ?>	
		
		
		<div class="header-countdown-timer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-6 col-xs-12">
						<p id="countdown-timer-date" class="text-center"></p>
					</div>
					<div class="col-md-6 col-xs-12">
						<p id="countdown-timer-text" class="text-center">
						<?php 
						if(isset($techno_options['countdown_text'])) { 
							echo esc_html($techno_options['countdown_text']); 
						} 
						?>
						</p>
					</div>
				
				</div>
			</div>
		</div>
		
	<?php endif; ?>	
	
	<?php 
	
		do_action('techno_banner'); 
		
		do_action('ecommerce_plus_top_bar');
		
		//page options layout has heighest priority
		if ($techno_options['site_header_layout'] == 'default' && ecommerce_plus_get_header_layout() == 'storefront') {
			$techno_options['site_header_layout'] = 'storefront'; 
		}
		
		if ($techno_options['site_header_layout'] == 'storefront' && ecommerce_plus_get_header_layout() == 'default') {
			$techno_options['site_header_layout'] = 'default'; 
		}
		
		if (!class_exists('WooCommerce')) { 
			$techno_options['site_header_layout'] = 'default'; 
		}
				
		if ($techno_options['site_header_layout'] == 'default') { ?>					
			<div id="theme-header" class="header-default">
				<div class="container">
					<?php do_action('ecommerce_plus_toggle'); ?>					
					<?php do_action('ecommerce_plus_branding'); ?>													
					<?php do_action('ecommerce_plus_navigation'); ?>						
				</div>
			</div>			
		
		<?php } elseif ($techno_options['site_header_layout'] == 'storefront') { ?>
		
			<div  class="header-storefront">
				<div class="container">

					<div class="row vertical-center">
						<div class="col-md-4 col-sm-12 col-xs-12">
						<?php do_action('ecommerce_plus_branding'); ?>
						</div>
						
						<div class="col-md-5 col-sm-12 col-xs-12 header-search-widget">
							<?php the_widget('ecommerce_plus_product_search_widget'); ?>
						</div>
						
						<div class="col-md-3 col-sm-12 col-xs-12 header-woocommerce-icons">
							<?php the_widget('ecommerce_plus_cart_wishlist_acc_widget'); ?>
						</div>
					</div>
				
				</div>
			</div>
			
			<div id="theme-header" class="header-storefront menu">
				<div class="container">
					<?php do_action('ecommerce_plus_toggle'); ?>
					<?php do_action('ecommerce_plus_navigation'); ?>
				</div>
			</div>		
		
		<?php } ?>
		
</header><!-- #masthead -->

<div id="content" class="site-content">

<?php


if ($techno_options['breadcrumb_show']) :

    if(!is_front_page() || (is_home() && get_option('page_on_front') < 1)) {
	
	$techno_header_image = $techno_options['breadcrumb_image'];

	if ( is_singular() ) :
		$techno_header_image = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : $techno_header_image;
	endif;
	?>
	
	<div id="page-site-header" class="relative" style="background-image: url('<?php echo esc_url( $techno_header_image ); ?>');">
		<div class="overlay"></div>
		<div class="container">
			<header class="page-header">
				<h2 class="page-title"><?php echo esc_html(ecommerce_plus_custom_header_banner_title()); ?></h2>
			</header>
	
			<?php ecommerce_plus_add_breadcrumb(); ?>
		</div><!-- .wrapper -->
	</div><!-- #page-site-header -->
	<?php
	//end header image
	}
endif;

if (class_exists('WooCommerce') && is_shop()) {

?>

<section id="before-shop-page">
	<div>
		<?php			
		$techno_args = array( 'post_type' => 'page', 'ignore_sticky_posts' => 1 , 'post__in' => array($techno_options['before_shop']));
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