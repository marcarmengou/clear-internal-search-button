=== Clear Internal Search Button ===
Contributors: marc4
Tags: clear, internal, search, button, usability
Requires at least: 6.9
Tested up to: 6.9
Requires PHP: 8.2
Tested PHP: 8.3
Stable tag: 2.1
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a button in admin area to clear text of search field for posts, pages, comments, users, media, categories, tags, plugins, and themes.

== Description ==

Adds a button to clear the search field inside the admin area that will save you time and make intensive search usage more convenient.

Works in the search engine for posts, pages, comments, users, media library, categories, tags, plugins and themes.

== Installation ==

1. Go to **Plugins > Add New Plugin**.
2. Search for **Clear Internal Search Button**.
3. Install and activate the **Clear Internal Search Button** plugin.

== Changelog ==

= [2.1] - 2025-03-05 =

* Bumped minimum WordPress requirement to 6.9.
* Bumped minimum PHP requirement to 8.2.
* Changed capability check from edit_posts to manage_options.

= [2.0] - 2025-02-27 =

* Added capability check to prevent asset loading for unprivileged users.
* Introduced CISB_VERSION constant to centralise version management.
* Separated wp_register_script/style from wp_enqueue_script/style.
* Added strict comparison to in_array() calls.
* Added PHPDoc block to main function.
* Replaced inline HTML string in jQuery button constructor with object syntax.
* Moved initial button visibility from inline style to CSS.
* Replaced fragile positional CSS selectors with class-based selectors.
* Removed !important from button alignment rule.
* Fixed changelog date formats to YYYY-MM-DD.

= [1.9] - 2024-08-04 =

* Scripts and styles will be loaded only when necessary.
* Prevent text from hiding behind the clear button.

= [1.8] - 2024-10-28 =

* Commented style.css
* Fixes in style.css

= [1.6] - 2024-05-14 =

* Added "X" button inside the search field.

= [1.5] - 2024-05-13 =

* Added version to `wp_enqueue_style`.
* Security fix

= [1.3] - 2024-04-27 =

* Added clear button on media library, categories, plugins and themes pages.

= [1.2] - 2024-03-31 =

* Button appears only when there is text in the search field.
* Added clear button on comments and users pages.
* Some corrections.

= [1.0] - 2024-01-15 =

* First version.
