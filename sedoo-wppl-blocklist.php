<?php
/**
 * Plugin Name: Sedoo - Blocklist
 * Description: Liste de blocks
 * Version: 0.0.4
 * Author: Nicolas Gruwe & Pierre Vert - SEDOO DATA CENTER
 * Author URI:      https://www.sedoo.fr 
 * GitHub Plugin URI: sedoo/sedoo-wppl-blocklist
 * GitHub Branch:     master
 */
// http://localhost/usineasite/wordpress/get/wp-admin/edit.php?post_type=wp_block

include 'sedoo-wppl-blocklist-functions.php';
include 'sedoo-wppl-blocklist-acf.php';
include 'inc/sedoo-wppl-blocklist-acf-fields.php';

function sedoo_blocklist() {
    wp_register_style( 'sedoo_blocklist_css', plugins_url('css/blocklist.css', __FILE__) );
    wp_enqueue_style( 'sedoo_blocklist_css' );
}
add_action( 'wp_head', 'sedoo_blocklist' );