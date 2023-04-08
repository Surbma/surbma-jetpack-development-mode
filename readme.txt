=== Surbma | Jetpack Offline Mode ===
Contributors: Surbma, CherryPickStudios
Donate link: https://surbma.com/donate/
Tags: jetpack
Requires at least: 5.1
Tested up to: 6.2
Stable tag: 2.2
Requires PHP: 7.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enables Jetpack's Offline Mode, to use some modules without having a WordPress.com account.

== Description ==

With Offline Mode, features that do not require a connection to WordPress.com servers can be activated.

This plugin is using the jetpack_offline_mode filter to enable the Offline Mode. If you are familiar with ftp and file edit, you can also add the `define( 'JETPACK_DEV_DEBUG', true);` to the wp-config.php file. Make sure you add it before the `/* That's all, stop editing! Happy blogging. */` line.

This plugin also checks if the Jetpack plugin is already activated, so it is safe to use this plugin.

== Installation ==

1. Upload `surbma-jetpack-development-mode` folder to the `/wp-content/plugins/` directory
2. Activate the Surbma | Jetpack Offline Mode plugin through the 'Plugins' menu in WordPress
3. That's it. :)

== Frequently Asked Questions ==

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 2.2 =

Release date: 2020-10-10

- OTHER - Update README.md file with new plugin name.
- TWEAK - PHP short function.

= 2.1 =

Release date: 2020-10-09

- FIX - Update filter name to avoid deprecation notices.
- OTHER - New plugin name to follow Jetpack's naming.

= 2.0 =

Release date: 2020-02-10

- TWEAK - Tested with WordPress 5.3 version.
- TWEAK - Updated to use a new way to deploy it to wp.org repo.

= 1.1.4 =

- Fix localization.
- Prevent direct access to the plugin.

= 1.1.3 =

- Tested up to WordPress 4.1
- Extended description.

= 1.1.2 =

- Added hungarian translation.

= 1.1.1 =

- Added pot file for localization

= 1.1.0 =

- First commit to the official WordPress repo.
- Added localization.

= 1.0.0 =

- Initial release.
