<?php

/**
 * Plugin Name:       Time and Date Shortcodes
 * Description:       Adds shortcodes for displaying the current year, day and time.
 * Version:           1.0
 * Author:            plugins.club
 * Author URI:        https://plugins.club/free-wordpress-plugins/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       time-date-shortcodes
 */

// If accessed directly, exit
if ( ! defined( 'ABSPATH' ) ) exit;

// Y = Year
function pluginsclub_current_year_shortcode_format() {
  return date('Y');
}
add_shortcode('Y', 'pluginsclub_current_year_shortcode_format');

// Day of the Week
function pluginsclub_current_day_shortcode_format() {
  return date('l');
}
add_shortcode('day', 'pluginsclub_current_day_shortcode_format');

// d = Day
function pluginsclub_current_day_shortcode_format_d() {
  return date('d');
}
add_shortcode('d', 'pluginsclub_current_day_shortcode_format_d');

// m = Month
function pluginsclub_current_day_shortcode_format_m() {
  return date('m');
}
add_shortcode('m', 'pluginsclub_current_day_shortcode_format_m');

// Time in 24h format
function pluginsclub_current_time_shortcode_format_24h() {
  return date('H:i:s');
}
add_shortcode('time', 'pluginsclub_current_time_shortcode_format_24h');

// Time in 12h format
function pluginsclub_current_time_shortcode_format_12h() {
  return date('h:i:s A');
}
add_shortcode('hours', 'pluginsclub_current_time_shortcode_format_12h');
