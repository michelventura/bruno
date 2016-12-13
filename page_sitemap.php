<?php
/**
 *
 * @package MichVentura\Bruno
 * @since   1.0.0
 * @author  Michel Ventura
 * @link    http://michelventura.com/bruno
 * @license GNU General Public License 2.0+
 */

//* Template Name: Sitemap

//* Remove standard post content output
remove_action( 'genesis_post_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

add_action( 'genesis_entry_content', 'genesis_page_archive_content' );
add_action( 'genesis_post_content', 'genesis_page_archive_content' );


/**
 * This function outputs sitemap-esque columns displaying all pages,
 * categories, authors, monthly archives, and recent posts.
 *
 * @since 1.6
 *
 * @uses genesis_a11y() to check for headings choice.
 * @uses genesis_sitemap() to generate the sitemap.
 *
 */
function genesis_page_archive_content() {

	$heading = ( genesis_a11y( 'headings' ) ? 'h2' : 'h4' );

	genesis_sitemap( $heading );

}

genesis();
