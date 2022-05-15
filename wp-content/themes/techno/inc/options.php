<?php

add_filter('ecommerce_plus_default_theme_options', 'techno_default_settings');

function techno_default_settings($ecommerce_plus_default_options){
		
		
	$ecommerce_plus_default_options['primary_color'] = '#0c5adb';
	$ecommerce_plus_default_options['accent_color'] = '#063d99';
	
	$ecommerce_plus_default_options['site_header_layout'] = 'default';
	
	$ecommerce_plus_default_options['header_title_color'] = '#115b02';
	
	$ecommerce_plus_default_options['store_menu_color'] = '#f5fff5';
	$ecommerce_plus_default_options['store_menubar_color'] = '#1e73be';
	
	$ecommerce_plus_default_options['menubar_border_height'] = 0;

	$ecommerce_plus_default_options['heading_font'] = 'Google Sans';	
	$ecommerce_plus_default_options['body_font'] = 'Google Sans';	
	
	$ecommerce_plus_default_options['header_title_color'] = '#1e0675';
	
	$ecommerce_plus_default_options['before_shop'] = 0;
	$ecommerce_plus_default_options['after_shop'] = 0;
	
	$ecommerce_plus_default_options['footer_bg_color'] = '#111a3a';
	$ecommerce_plus_default_options['footer_text_color'] = '#ffffff';
	$ecommerce_plus_default_options['topbar_login_label'] = esc_html__('Contact', 'techno');
	
	$ecommerce_plus_default_options['breadcrumb_image'] = get_stylesheet_directory_uri().'/images/breadcrumb.jpg';
	$ecommerce_plus_default_options['breadcrumb_show'] = true;
	
	$ecommerce_plus_default_options['topbar_login_register_enable'] = false;

	
	return $ecommerce_plus_default_options;
}
