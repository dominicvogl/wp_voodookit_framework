<?php

/**
 * @var $hostname
 */

// Set environment based on hostname
switch ($hostname) {
    case 'voodookit.loc':
        define('WP_ENV', 'dev');
        break;

    default: 
        define('WP_ENV', 'prod');
}