<?php
/**
 * Create A Simple Theme Options Panel
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Start Class
if ( ! class_exists( 'WPEX_Theme_Options' ) ) {

	class WPEX_Theme_Options {

		/**
		 * Start things up
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			// We only need to register the admin panel on the back-end
			if ( is_admin() ) {
				add_action( 'admin_menu', array( 'WPEX_Theme_Options', 'add_admin_menu' ) );
				add_action( 'admin_init', array( 'WPEX_Theme_Options', 'register_settings' ) );
			}

		}

		/**
		 * Returns all theme options
		 *
		 * @since 1.0.0
		 */
		public static function get_theme_options() {
			return get_option( 'theme_options' );
		}

		/**
		 * Returns single theme option
		 *
		 * @since 1.0.0
		 */
		public static function get_theme_option( $id ) {
			$options = self::get_theme_options();
			if ( isset( $options[$id] ) ) {
				return $options[$id];
			}
		}

		/**
		 * Add sub menu page
		 *
		 * @since 1.0.0
		 */
		public static function add_admin_menu() {
			add_menu_page(
				esc_html__( 'Theme Settings', 'text-domain' ),
				esc_html__( 'Theme Settings', 'text-domain' ),
				'manage_options',
				'theme-settings',
				array( 'WPEX_Theme_Options', 'create_admin_page' )
			);
		}

		/**
		 * Register a setting and its sanitization callback.
		 *
		 * We are only registering 1 setting so we can store all options in a single option as
		 * an array. You could, however, register a new setting for each option
		 *
		 * @since 1.0.0
		 */
		public static function register_settings() {
			register_setting( 'theme_options', 'theme_options', array( 'WPEX_Theme_Options', 'sanitize' ) );
		}

		/**
		 * Sanitization callback
		 *
		 * @since 1.0.0
		 */
		public static function sanitize( $options ) {

			// If we have options lets sanitize them
			if ( $options ) {

				

				// Input
				if ( ! empty( $options['input_example'] ) ) {
					$options['input_example'] = sanitize_text_field( $options['input_example'] );
				} else {
					unset( $options['input_example'] ); // Remove from options if empty
				}

				// Input
				if ( ! empty( $options['input_example1'] ) ) {
					$options['input_example1'] = sanitize_text_field( $options['input_example1'] );
				} else {
					unset( $options['input_example1'] ); // Remove from options if empty
				}


				// Input
				if ( ! empty( $options['input_example2'] ) ) {
					$options['input_example2'] = sanitize_text_field( $options['input_example2'] );
				} else {
					unset( $options['input_example2'] ); // Remove from options if empty
				}


				// Input
				if ( ! empty( $options['input_example4'] ) ) {
					$options['input_example4'] = sanitize_text_field( $options['input_example4'] );
				} else {
					unset( $options['input_example4'] ); // Remove from options if empty
				}

				// Input
				if ( ! empty( $options['input_example6'] ) ) {
					$options['input_example6'] = sanitize_text_field( $options['input_example6'] );
				} else {
					unset( $options['input_example6'] ); // Remove from options if empty
				}



				
			}

			// Return sanitized options
			return $options;

		}

		/**
		 * Settings page output
		 *
		 * @since 1.0.0
		 */
		public static function create_admin_page() { ?>

			<div class="wrap">

				<h1><?php esc_html_e( 'Theme Options', 'text-domain' ); ?></h1>

				<form method="post" action="options.php">

					<?php settings_fields( 'theme_options' ); ?>

					<table class="form-table wpex-custom-admin-login-table">

						<?php // Checkbox example ?>
						

						<?php // Text input example ?>
						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Facebook Link', 'text-domain' ); ?></th>
							<td>
								<?php $value = self::get_theme_option( 'input_example' ); ?>
								<input type="text"  style="width: 60%" name="theme_options[input_example]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>

						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Instagram Link', 'text-domain' ); ?></th>
							<td>
								<?php $value = self::get_theme_option( 'input_example1' ); ?>
								<input type="text" style="width: 60%" name="theme_options[input_example1]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>


						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Youtube Link', 'text-domain' ); ?></th>
							<td>
								<?php $value = self::get_theme_option( 'input_example2' ); ?>
								<input type="text" style="width: 60%" name="theme_options[input_example2]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>



						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Facebook App ID For Comments', 'text-domain' ); ?></th>
							<td>
								<?php $value = self::get_theme_option( 'input_example6' ); ?>
								<input type="text" style="width: 60%" name="theme_options[input_example6]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>


						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Copy Right Text', 'text-domain' ); ?></th>
							<td>
								<?php $value = self::get_theme_option( 'input_example4' ); ?>
								<input type="text" style="width: 60%" name="theme_options[input_example4]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>


						

					</table>

					<?php submit_button(); ?>

				</form>

			</div><!-- .wrap -->
		<?php }

	}
}
new WPEX_Theme_Options();

// Helper function to use in your theme to return a theme option value
function myprefix_get_theme_option( $id = '' ) {
	return WPEX_Theme_Options::get_theme_option( $id );
}