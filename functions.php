<?php

/**
 *	**************************************************
 *
 *	File Name:			functions.php
 *	Description:		This file contains the whole logic of this theme, sets some constants and includes various important files
 *
 *	@since 1.0.0
 *
 *	**************************************************
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) )
	exit;

/**
 *
 * Define Codex theme constants
 *
 * @since	1.0.0
 * @return	void
 *
 */
add_action( 'after_setup_theme', 'codex_constants' );

function codex_constants() {
	
	if ( ! defined( 'THEME_NAME' ) )
		define( 'THEME_NAME', 'Codex' );

	if ( ! defined( 'THEME_VERSION' ) )
		define( 'THEME_VERSION', '1.0.0' );
	
	if ( ! defined( 'THEME_TEMPLATE_DIR' ) )
		define( 'THEME_TEMPLATE_DIR', get_template_directory() );

	if ( ! defined( 'THEME_TEMPLATE_URL' ) )
		define( 'THEME_TEMPLATE_URL', get_template_directory_uri() );


}

/**
 * Load all the additional files and features
 *
 * @since 1.0.0
 */

require 'includes/class-codex.php';