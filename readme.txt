=== Surbma - Jetpack Development Mode ===
Contributors: Surbma
Donate link: http://surbma.com/
Tags: jetpack
Requires at least: 3.0
Tested up to: 4.1
Stable tag: 1.1.4
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enables Jetpack's Development Mode, to use some modules without having a WordPress.com account.

== Description ==

With Development Mode, features that do not require a connection to WordPress.com servers can be activated.

This plugin is using the jetpack_development_mode filter to enable the Development Mode. If you are familiar with ftp and file edit, you can also add the `define( 'JETPACK_DEV_DEBUG', true);` to the wp-config.php file. Make sure you add it before the `/* That's all, stop editing! Happy blogging. */` line.

This plugin also checks if the Jetpack plugin is already activated, so it is safe to use this plugin.

== Installation ==

1. Upload `surbma-jetpack-development-mode` folder to the `/wp-content/plugins/` directory
2. Activate the Surbma - Jetpack Development Mode plugin through the 'Plugins' menu in WordPress
3. That's it. :)

== Frequently Asked Questions ==

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

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
