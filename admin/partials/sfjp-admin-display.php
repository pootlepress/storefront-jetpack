<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://pootlepress.co.uk
 * @since      1.0.0
 *
 * @package    Storefront_Jetpack
 * @subpackage Storefront_Jetpack/admin/partials
 */
?>

<div class="wrap">
	<h2>Storefront Jetpack</h2>
	<p class="description">Enable disable stuff here</p>

	<?php settings_errors(); ?>

	<form method="post" action="options.php">
		<?php settings_fields( 'general' ); ?>
		<?php do_settings_sections( 'general' ); ?>
		<?php submit_button(); ?>
	</form>
</div>