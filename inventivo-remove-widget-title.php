<?php /*
Contributors: inventivogermany
Plugin Name:  Remove Widget Title | inventivo
Plugin URI:   https://www.inventivo.de/wordpress-agentur/wordpress-plugins
Description:  Remove specific widget titles
Version:      0.0.2
Author:       Nils Harder
Author URI:   https://www.inventivo.de
Tags: remove widget title
Requires at least: 3.0
Tested up to: 5.2.2
Stable tag: 0.0.2
Text Domain: inventivo-remove-widget-title
Domain Path: /languages
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//Remove Widget Title Function
add_filter( 'widget_title', 'inv_remove_widget_title' );
function inv_remove_widget_title( $widget_title ) {
	if ( substr ( $widget_title, 0, 1 ) == '!' )
		return;
	else
		return ( $widget_title );
}