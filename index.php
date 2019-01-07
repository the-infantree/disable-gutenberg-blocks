<?php
/*
* Plugin Name: Disable Gutenberg Blocks
* Plugin URI: https://infantree.com
* Description: Allows theme developers to decide which Gutenberg blocks to show
* Author: Infantree
* Author URI: https://infantree.com/
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

 function inf_disable_blocks() {
     wp_enqueue_script(
         'inf-disable-blocks',
         plugins_url( 'disabled-blocks.js', __FILE__ ),
         array( 'wp-blocks', 'wp-dom' ), time(), true
     );
 }
 add_action( 'enqueue_block_editor_assets', 'inf_disable_blocks' );
 ?>
