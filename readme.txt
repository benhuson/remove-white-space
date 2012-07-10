=== Remove White Space ===
Contributors: husobj
Donate link: http://www.benhuson.co.uk/wordpress-plugins/remove-white-space/
Tags: ie6, lists, white space, whitespace, wp_list_pages, wp_list_categories
Requires at least: 2.8
Tested up to: 3.4.1
Stable tag: 1.0.1

Removes white space from wp_list_pages and wp_list_categories (nice for IE6 - prevents gaps in vertical lists).

== Description ==
This function removes whitespace from the list items outputted by `wp_list_pages` and `wp_list_categories`.

This white space can cause layout issues in IE6 and some other browsers such as gaps between each list item even when there is no margin or padding applied.

Simply call `wp_list_pages` or `wp_list_categories` as usual:

`<?php wp_list_pages(); ?>`

To ensure there is no trailing white space around the first and last items, you should remove any white space between you `<ul>` tags and the PHP function:

`<ul><?php wp_list_pages(); ?></ul>`

== Changelog ==

= 1.0.1 =

* Checked compatibility with WordPress 3.4.1

= 1.0 =

* First Release