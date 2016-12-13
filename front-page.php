<?php

	add_filter( 'genesis_attr_site-inner', 'sk_attributes_site_inner' );

/**
 * Add attributes for site-inner element.
 *
 * @since 2.0.0
 *
 * @param array $attributes Existing attributes.
 *
 * @return array Amended attributes.
 */

	function sk_attributes_site_inner( $attributes ) {
			$attributes['role']     = 'main';
			$attributes['itemprop'] = 'mainContentOfPage';
			return $attributes;
	}

	// Remove div.site-inner's div.wrap
	add_filter( 'genesis_structural_wrap-site-inner', '__return_empty_string' );

	// Display header
	get_header();

	// Content
	echo 'Hello World';

	// Display Footer
	get_footer();
