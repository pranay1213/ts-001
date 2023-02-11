<?php
/**
 * Basic tab
 */
if ( ! defined( 'ABSPATH' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit;
}

set_as_network_screen();

$is_custom = false;
if ( ( ! defined( 'WP_NETWORK_ADMIN' ) || ( defined( 'WP_NETWORK_ADMIN' ) && false === WP_NETWORK_ADMIN ) ) && is_multisite() ) {
	$get_inherit = get_option( 'breeze_inherit_settings', '1' );
	$is_custom   = filter_var( $get_inherit, FILTER_VALIDATE_BOOLEAN );
}

$icon = BREEZE_PLUGIN_URL . 'assets/images/tools-active.png';

$level = '';
if ( is_multisite() ) {
	if ( is_network_admin() ) {
		$level = 'network';
	} else {
		$level = get_current_blog_id();
	}
}

?>
<section>
	<?php if ( true === $is_custom ) { ?>
		<div class="br-overlay-disable"><?php _e( 'Settings are inherited', 'breeze' ); ?></div>
	<?php } ?>
	<div class="br-section-title">
		<img src="<?php echo $icon; ?>"/>
		<?php _e( 'TOOLS', 'breeze' ); ?>
	</div>

	<!-- START OPTION -->
	<div class="br-option-item">
		<div class="br-label">
			<div class="br-option-text">
				<?php _e( 'Export Settings', 'breeze' ); ?>
			</div>
		</div>
		<div class="br-option">
			<input type="button" name="breeze_export_settings" id="breeze_export_settings" class="br-blue-button" value="<?php _e( 'Download Settings', 'breeze' ); ?>">
			<input type="hidden" id="breeze-level" value="<?php echo esc_attr( $level ); ?>">
			<div class="br-note">
				<p style="font-weight: bold">
					<?php _e( 'Download a backup file of your settings', 'breeze' ); ?>
				</p>
			</div>
		</div>
	</div>
	<!-- END OPTION -->

	<!-- START OPTION -->
	<div class="br-option-item">
		<div class="br-label">
			<div class="br-option-text">
				<?php _e( 'Import Settings:', 'breeze' ); ?>
			</div>
		</div>
		<div class="br-option">
			<div class="br-input-container">
			<div class="br-input-item">
				<label for="breeze_import_settings" class="br-label-for-file">
				<input type="file" name="breeze_import_settings" id="breeze_import_settings">
				</label>
			</div>
			<div class="br-input-item">
				<div class="br-file-text"><?php _e( 'No File Chosen', 'breeze' ); ?></div>
			</div>
			</div>

			<div class="br-note br-note-no-margin">
				<p>
					<?php
					$bytes = wp_max_upload_size();
					$size  = size_format( $bytes );

					/* translators: Upload size */
					echo wp_sprintf( __( 'Choose a JSON file from your computer (maximum size: %s)', 'breeze' ), $size );
					?>
				</p>
				<p id="file-selected"></p>
				<p id="file-error" class="file_red br-notice" style="font-weight: bold"></p>
			</div>

			<input type="button" id="breeze_import_btn" value="<?php _e( 'Upload File and Import Settings', 'breeze' ); ?>" class="br-blue-button" disabled/>
			<div class="br-space"></div>
		</div>
	</div>
	<!-- END OPTION -->

</section>
