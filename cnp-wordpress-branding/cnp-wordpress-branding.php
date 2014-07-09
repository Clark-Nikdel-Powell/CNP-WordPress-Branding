<?php

/*

Plugin Name: CNP Wordpress Branding
Plugin URI: http://antoniocampos.no-ip.com/2009/02/26/wordpress-login-form-image/
Description: Change a couple Wordpress logos to CNP logos
Author: Taylor Gorman
Author URI: http://clarknikdelpowell.com
Version: 2.0

This plugin is a modified version of Antonio Campos' (http://antoniocampos.no-ip.com)
WP Custom Login Logo plugin (http://antoniocampos.no-ip.com/2009/02/26/wordpress-login-form-image/).

Copyright 2008  Taylor Gorman  (email : taylor@cnpstudio.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

// change logo on login page
function loginCSS() { echo "<style type='text/css'>.login h1 a {background-image: url(".WP_PLUGIN_URL."/cnp-wordpress-branding/login.png); background-size:176px 61px; width:auto;}</style>".PHP_EOL; }
add_action('login_head', 'loginCSS');
// change new logo's url to CNP
function changeloginURL() { return "http://clarknikdelpowell.com"; }
add_filter('login_headerurl', 'changeloginURL');

// change icon logo at top of admin pages
function adminCSS() { echo "<style type='text/css'>#wp-admin-bar-wp-logo > .ab-item .ab-icon {background-image:url(".WP_PLUGIN_URL."/cnp-wordpress-branding/admin.png) !important; background-position:0 0;} #wpadminbar.nojs #wp-admin-bar-wp-logo:hover > .ab-item .ab-icon, #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {background-position:0 -21px;}</style>".PHP_EOL; }
add_action('admin_head', 'adminCSS');


?>