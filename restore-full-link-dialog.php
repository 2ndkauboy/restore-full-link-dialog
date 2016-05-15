<?php
/**
 * Restore Full Link Dialog
 *
 * @package     RestoreFullLinkDialog
 * @author      Bernhard Kau
 * @license     GPLv3
 *
 * @wordpress-plugin
 * Plugin Name: Restore Full Link Dialog
 * Plugin URI:  https://kau-boys.de
 * Description: Restore the full link editor.
 * Version:     1.0.0
 * Author:      Bernhard Kau
 * Author URI:  https://kau-boys.de
 * Text Domain: restore-full-link-dialog
 * License:     GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Adding the new plugin to TinyMCE
 *
 * @param array $plugins An array of all plugins.
 *
 * @return array
 */
function restore_full_link_dialog_tinymce_plugins( $plugins ) {
	$plugins['wplinkpre45'] = plugins_url( 'js/tinymce/', __FILE__ ) . 'wplinkpre45/editor_plugin.js';
	return $plugins;
}
add_filter( 'mce_external_plugins', 'restore_full_link_dialog_tinymce_plugins' );
