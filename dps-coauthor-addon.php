<?php
/**
 * Plugin Name: Display Posts Shortcode, Co-Authors Plus Addon
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
function be_multiple_authors_in_dps( $output ) {
	if( function_exists( 'coauthors' ) )
		$output = ' <span class="author">' . coauthors( ', ', ' and ', 'by ', '', false ) . '</span>';
	return $output;
}
add_filter( 'display_posts_shortcode_author', 'be_multiple_authors_in_dps' );