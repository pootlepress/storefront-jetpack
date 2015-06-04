<?php
/**
 * Created by Shramee
 * Date: 4/6/15
 * Time: 2:32 PM
 */

/**
 * Hooks custom logo function
 *
 * @action init
 * @since 1.0.0
 */
function sfjp_custom_logo() {
	remove_action( 'storefront_header', 'storefront_site_branding', 20 );
	add_action( 'storefront_header', 'sfjp_display_custom_logo', 20 );
}
add_action( 'init', 'sfjp_custom_logo' );

/**
 * Display custom logo
 *
 * @action storefront_header
 * @since 1.0.0
 */
function sfjp_display_custom_logo() {
	?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-link" rel="home">
		<img src="<?php echo get_theme_mod( 'sfjp_custom_logo' ); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" />
	</a>
<?php
}

/**
 * Adds custom logo field in customizer
 *
 * @action customize_register
 * @since 1.0.0
 */
function sfjp_custom_logo_customizer( $wp_customize ) {

	$wp_customize->add_setting( 'sfjp_custom_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sfjp_custom_logo', array(
		'label'    => __( 'Logo', 'sfjp' ),
		'section'  => 'title_tagline',
		'settings' => 'sfjp_custom_logo',
	) ) );
}
add_action( 'customize_register', 'sfjp_custom_logo_customizer' );