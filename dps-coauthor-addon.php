<?php
/**
 * Plugin Name: Co-Authors Plus Addon for Display Posts Shortcode
 * Plugin URI: https://github.com/billerickson/dps-coauthor-addon
 * Description: Display multiple authors in post listings
 * Version: 1.0.0
 * Author: Bill Erickson
 * Author URI: http://www.billerickson.net
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @package DPS Coathor Addon
 * @version 1.0.0
 * @author Bill Erickson <bill@billerickson.net>
 * @copyright Copyright (c) 2016, Bill Erickson
 * @link http://www.billerickson.net/shortcode-to-display-posts/
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Multiple Authors in DPS
 *
 */
function be_multiple_authors_in_dps( $output = '', $original_atts = array() ) {

	if( ! function_exists( 'coauthors' ) )
		return $output;

	$atts = shortcode_atts( array( 
		'coauthor_function'     => 'coauthors',
		'coauthor_between'      => ', ',
		'coauthor_between_last' => ' and ',
		'coauthor_before'       => 'by ',
		'coauthor_after'        => '',
	), $original_atts, 'dps-coauthor-addon' );
	
	$function     = in_array( $atts['coauthor_function'], array( 'coauthors', 'coauthors_posts_links', 'coauthors_links' ) ) ? $atts['coauthor_function'] : 'coauthors';
	$between      = esc_html( $atts['coauthor_between'] );
	$between_last = esc_html( $atts['coauthor_between_last'] );
	$before       = esc_html( $atts['coauthor_before'] );
	$after        = esc_html( $atts['coauthor_after'] );
	$echo         = false;
	
	return ' <span class="author">' . call_user_func_array( $function, array( $between, $between_last, $before, $after, $echo ) ) . '</span>';

}
add_filter( 'display_posts_shortcode_author', 'be_multiple_authors_in_dps', 10, 2 );
