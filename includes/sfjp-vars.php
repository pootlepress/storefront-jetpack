<?php
/**
 * Created by Shramee
 * Date: 3/6/15
 * Time: 10:05 PM
 */

/**
 * Contains default modules in Storefront Jetpack
 *
 * Example
 * 'mod_id' => array(
 *   'label' => 'Mod Name',                      //Required
 *   'url' => 'http://modurl.com',               //Default http://pootlepress.com
 *   'description' => 'Describe the mod here',   //Required
 *   'img' => 'http://url/to/mod/img.png',       //Default pootle image
 *   'author' => 'Shramee',                      //Default PootlePress
 *   'author_url' => 'http://shramee.com',       //Default http://pootlepress.com
 * ),
 *
 * @since 1.0.0
 */
$sfjp_modules = array(
	'align_menu_right' => array(
		'label' => 'Storefront Align Menu Right',
		'url' => 'http://www.pootlepress.com/shop/align-menu-right-woothemes-storefront/',
		'description' => 'Align the primary navigation to the right of the logo.',
	),
	'add_top_bar' => array(
		'label' => 'Add Top Bar',
		'url' => 'http://pootlepress.com',
		'description' => 'Adds a top bar to Storefront, before the header.',
	),
	'remove_header_search' => array(
		'label' => 'Remove Search bar from header',
		'url' => 'http://pootlepress.com',
		'description' => 'Removes the search bar from the header',
	),
	'custom_logo' => array(
		'label' => 'Add Logo',
		'url' => 'http://pootlepress.com',
		'description' => 'Add your own custom logo to Storefront',
	),
);