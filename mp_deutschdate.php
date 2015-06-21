<?php
/*
Plugin Name: DeutschDate
Plugin URI: http://multipop.org/
Description: Translates English months and days output from WordPress template tags to their German equivalent.
Version: 1.3
Author: Barry Ceelen
Author URI: http://multipop.org/
Min WP Version: 1.5.1
Max WP Version: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function deutschdate_str_replace($text) {
$days_english = array(
'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',
'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun',
'Mar', 'May', 'Oct', 'Dec',
'January', 'February', 'March', 'May', 'June', 'July', 'August', 'October', 'December',
'1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '0th',
);

$days_german = array(
'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag',
'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa', 'So',
'Mrz', 'Mai', 'Okt', 'Dez',
'Januar', 'Februar', 'M&auml;rz', 'Mai', 'Juni', 'Juli', 'August', 'Oktober', 'Dezember',
'1.', '2.', '3.', '4.', '5.', '6.', '7.', '8.', '9.', '0.',
);

return str_replace($days_english, $days_german, $text);
}

add_filter('the_time', 'deutschdate_str_replace');
add_filter('the_date', 'deutschdate_str_replace');
add_filter('get_the_time', 'deutschdate_str_replace');
add_filter('get_the_date', 'deutschdate_str_replace');
add_filter('the_modified_time', 'deutschdate_str_replace');
add_filter('the_modified_date', 'deutschdate_str_replace');
add_filter('get_the_modified_time', 'deutschdate_str_replace');
add_filter('get_the_modified_date', 'deutschdate_str_replace');

?>
