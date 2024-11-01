=== Time and Date Shortcodes ===
Contributors: stefanpejcic, pluginsclub
Donate link: https://plugins.club/free-wordpress-plugins/
Tags: time, date, year, shortcode
Requires at least: 5.8
Tested up to: 6.4.2
Stable tag: 1.0
Requires PHP: 7.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Shortcodes for displaying the current year, day and time.

== Description ==

Shortcodes for displaying the current year, day and time.

Available shortcodes:

- `[hours]` will display the current time in 12h format
- `[time]` will display the current time in 24h format
- `[day]` will display the date of the week
- `[d]` displays the current day of the month
- `[m]` displays the current month
- `[Y]` displays the current year

These shortcodes can be combined to display dates in different formats, for example:

- `[d] [m] [Y]`
- `[m].[d].[Y]`
- `[d]/[m]/[Y]`
- `[m]/[d]/[Y]`
- `[day][d]/[m]/[Y]`
- `[day] [d]/[m]/[Y] [hours]`
 
 
For more free WordPress plugins please visit [plugins.club](https://plugins.club).

== Installation ==

1. Upload the plugin file to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

For basic usage, you can also have a look at the [plugin web site](https://plugins.club/wordpress/time-and-date-wordpress-shortcodes/).

== Frequently Asked Questions ==

= How to use the plugin? =

Insert shortcode where you want to show them.

= Can I use it in the block editor (Gutenberd)? =

Yes, you can insert shortcodes anywhere.

= Why is the shortcode result not updated for every single visit? =

**Caching plugin!**

If you are using a caching plugin you may need to exclude the page or post with the shortcode from it so the content may be generated dynamically.

= Do shortcodes work in all places e.g. post title, footer, menus, etc.? =

No, by default WordPress allows shortcodes to be used only in the post’s content and widgets. If your theme does not apply shortcodes in other places automatically you may need to add additional code to your child theme’s functions.php to hook into those functions where you need to see the shortcodes applied.

For example:

`// Add Shortcodes to title.
add_filter(‘wp_title’, ‘do_shortcode’, 10);
add_filter(‘the_title’, ‘do_shortcode’, 10);
`

`
// Add shortcodes to the menu
add_filter(‘walker_nav_menu_start_el’, ‘do_shortcode’, 10);
`

Another option to allow use of shortcodes anywhere on the website it to use an additional plugin such as [Shortcodes Anywhere](https://wordpress.org/plugins/jonradio-shortcodes-anywhere-or-everywhere/).

= I have an idea on how to improve this plugin! =

Please send all your suggestions and ideas to our [email address](https://plugins.club/contact) and they may be developed and included in the plugin in future. 

== Upgrade Notice ==

This is a new version 1.0

== Screenshots ==


== Changelog ==
 
= 1.0 =

* Initial release