=== Talk to Composer ===
Contributors: heiglandreas
Tags: composer, git
Requires at least: 4.3
Tested up to: 4.5
Stable tag: 1.1
License: MIT
License URI: http://opensource.org/licenses/MIT

Add all your active plugins to a composer.json-File.

== Description ==

This plugin adds plugins on activation to a composer.json-file and on deactivation removes them.

That way you can handle your plugins via [composer](https://getcomposer.org).

Plugins are added to the composer.json via [wpackagist](https://wpackagist.org) which makes
the wordpress-plugin-directory available via git.

But you can also manually add plugins to the pluginlist and on activation the plugin is
checked for a composer.json file and if one exists the name is used to add the plugin to the
composer.json-File.


== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

There is no configuration needed.

== Frequently Asked Questions ==

= Where are the plugins loaded from? =

They are loaded from http://wpackagist.org

= What when I don't have composer installed? =

then we'll install a composer locally in your wordpress-location

== Changelog ==

= 1.1 =

Finally fully working
