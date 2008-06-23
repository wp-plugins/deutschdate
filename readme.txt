=== DeutschDate ===
Contributors: mendezki
Tags: german, deutsch, english, date, translate
Requires at least: 1.5
Tested up to: 2.5
Stable tag: trunk

Replaces english day and month names with their german equivalent

== Description ==

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