<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

// Set the script name
define('TL_SCRIPT', 'tracking/index.php');

// Initialize the system
define('TL_MODE', 'FE');
if ( file_exists ( dirname(__DIR__) . '/system/initialize.php' ) ) {
    // contao 3
    require dirname(__DIR__) . '/system/initialize.php';} else {
    require ( $_SERVER['DOCUMENT_ROOT']."/../system/initialize.php" );
}



// Run the controller
$tracking = NewsletterContent\Classes\NewsletterTracking::getInstance();
$tracking->run();
