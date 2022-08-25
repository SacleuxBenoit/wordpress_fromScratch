<?php
/**
 * Module Name: Block Bad Request Methods
 * Description: Block requests methods spotted as potentially dangerous.
 * Main Module: firewall
 * Author: SecuPress
 * Version: 2.0
 */

defined( 'SECUPRESS_VERSION' ) or die( 'Something went wrong.' );

if ( ! defined( 'DOING_CRON' ) ) {
	/**
	* @since 2.0 Allow all requests methods but customs and TRACE.
	*/
	$methods = array( 'GET' => true, 'POST' => true, 'HEAD' => true, 'PUT' => true, 'PATCH' => true, 'DELETE' => true, 'CONNECT' => true, 'OPTIONS' => true );

	if ( ! isset( $methods[ $_SERVER['REQUEST_METHOD'] ] ) ) {
		secupress_block( 'RMHM', [ 'code' => 405, 'b64' => [ 'data' => $_SERVER['REQUEST_METHOD'] ] ] );
	}
}

add_action( 'secupress.modules.activate_submodule_' . basename( __FILE__, '.php' ), 'secupress_requests_methods_de_activate_file' );
add_action( 'secupress.modules.deactivate_submodule_' . basename( __FILE__, '.php' ), 'secupress_requests_methods_de_activate_file' );
/**
 * On module de/activation, rescan.
 *
 * @since 2.0
 */
function secupress_requests_methods_de_activate_file() {
	secupress_scanit_async( 'Bad_Request_Methods' );
}
