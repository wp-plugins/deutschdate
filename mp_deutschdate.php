<?php
/*
Plugin Name: DeutschDate
Plugin URI: http://wordpress.org/plugins/deutschdate/
Description: Automagically converts english months and days (except for the initials) to their German equivalent.
Version: 1.2
Tested up to: 3.6
Author: Barry Ceelen
Author URI: http://multipop.org

Copyright 2008 Barry Ceelen (barry@multipop.org)

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
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function deutschdate_str_replace( $text ) {
	$days_english = array(
		'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',
		'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun',
		'Mar', 'May', 'Oct', 'Dec',
		'January', 'February', 'March', 'May', 'June', 'July', 'August', 'October', 'December',
		'1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '0th'
	);
	$days_german = array(
		'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag',
		'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa', 'So',
		'Mrz', 'Mai', 'Okt', 'Dez',
		'Januar', 'Februar', 'M&auml;rz', 'Mai', 'Juni', 'Juli', 'August', 'Oktober', 'Dezember',
		'1.', '2.', '3.', '4.', '5.', '6.', '7.', '8.', '9.', '0.'
	);
	$text = str_replace( $days_english, $days_german, $text );
	return $text;
}

add_filter( 'the_time', 'deutschdate_str_replace' );
add_filter( 'the_date', 'deutschdate_str_replace' );
add_filter( 'get_the_time', 'deutschdate_str_replace' );
add_filter( 'get_the_date', 'deutschdate_str_replace' );
add_filter( 'the_modified_time', 'deutschdate_str_replace' );
add_filter( 'the_modified_date', 'deutschdate_str_replace' );
add_filter( 'get_the_modified_time', 'deutschdate_str_replace' );
add_filter( 'get_the_modified_date', 'deutschdate_str_replace' );
