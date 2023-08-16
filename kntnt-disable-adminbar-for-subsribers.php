<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Disable Adminbar for Subsribers
 * Plugin URI:        https://github.com/Kntnt/kntnt-disable-adminbar-for-subsribers
 * Description:       Disables adminbar on the front for subscribers.
 * Version:           1.0.1
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

add_action( 'wp', function () {

	$user = wp_get_current_user();
	if ( count( $user->roles ) == 1 && 'subscriber' == $user->roles[0] ) {
		add_filter( 'show_admin_bar', '__return_false' );
	}

} );
