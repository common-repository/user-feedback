<?php
/**
 * Plugin Name: User Feedback
 * Plugin URI:  https://required.com/services/wordpress-plugins/user-feedback/
 * Description: Allows users to submit feedback and bug reports anywhere on the site using an interactive feedback button.
 * Version:     2.0.0-beta.4
 * Author:      required
 * Author URI:  https://required.com
 * License:     GPLv2+
 * Text Domain: user-feedback
 * Domain Path: /languages
 *
 * @package Required\User_Feedback
 */

/**
 * Copyright (c) 2015-2017 required (email : support@required.ch)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

defined( 'ABSPATH' ) || exit;

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require dirname( __FILE__ ) . '/vendor/autoload.php';
}

if ( ! class_exists( '\Required\User_Feedback\Controller' ) ) {
	trigger_error( sprintf( '%s does not exist. Check Composer\'s autoloader.', '\Required\User_Feedback\Controller' ), E_USER_WARNING );
	return;
}

$requirements_check = new WP_Requirements_Check( array(
	'title' => 'User Feedback',
	'php'   => '5.4',
	'wp'    => '4.4',
	'file'  => __FILE__,
) );

if ( $requirements_check->passes() ) {
	include dirname( __FILE__ ) . '/init.php';
}

unset( $requirements_check );
