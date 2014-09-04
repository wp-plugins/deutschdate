=== DutchDate ===
Contributors: mendezki, MacSteini
Donate link: https://flattr.com/thing/1174660/MacSteini
Tags: Deutsch, English, Date, Translate
Requires at least: 1.5.1
Tested up to: 4.0
Compatible up to: 4.0
Stable tag: 1.3
License: GPLv2 or later
License URI: http://gnu.org/licenses/gpl-2.0.html

Replaces english day and month names with their german equivalent

== Description ==

**Note:** This plugin was intended as a quick fix for displaying various english dates in german. It unfortunately does not fully cover all date displays.

Using an english Wordpress install and publishing posts in german? Those pesky English dates produced by `<?php the_time(); ?>` were getting on my nerves too, hence this plugin. Automagically converts english months and days (except for the initials, so far) to their german equivalent.

**Intended usage:**

Replacing dates like 'Thursday, October 22nd', for instance in your custom built theme or themes that just use the date without 'posted by..'.
Please note: It doesn't completely 'deutschify' your theme's date representation.

*Example:* Where some themes would say 'Posted by Annemarie on Thursday, October 22nd' only the date part is translated, resulting in 'Posted by Annemarie on Donnerstag, Oktober 22.'. For complete deutschification one would  either, depending on your specific situation:

* Edit Date Format settings under the Settings > General tab in your WordPress admin area.
* Edit your theme's template files, adapting the `<?php the_time(); ?>` template tag appropriately.
For a howto on editing the time template tag, check the [Template Tags/the time Codex page](http://codex.wordpress.org/Template_Tags/the_time).
* Or, as an alternative to this plugin, use a german .po language file.

**Dutchify in stead of Deutschify?**

For the Dutch version of this plugin, visit the [Dutchdate Plugin Page](http://wordpress.org/extend/plugins/dutchdate/)


== Installation ==

1. Copy the mp_deutschdate.php file to your Wordpress plugin directory.
1. Activate the plugin via the 'Plugins' menu in your WordPress admin.
1. Und los geht's.

== Changelog ==

* 1.3 Fixes March tranlsation
* 1.2 Added missing translation for December, thanks [netigate](http://wordpress.org/support/topic/december-missing-translation)
* 1.1 Added more filters as [suggested](http://wordpress.org/support/topic/plugin-broken-due-to-non-use-of-relevant-filters) by [Marco Steinbrecher](http://wordpress.org/support/profile/macsteini)
