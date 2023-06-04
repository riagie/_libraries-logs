<?php

/**
    *-----
    * TEST LIBRARIES
    * @return
    *-----
    *
    *-----
    * About author or Developer
    *-----
    *
    * @package	riagie/libraries-logs
    * @author	Ogie Nurdiana
    * @copyright Ogie Nurdiana
    * @license	LICENSE.MD MIT
    *
*/

date_default_timezone_set('Asia/Jakarta');

define ("__ROOT__", dirname(__DIR__, 1)); 

define ("BASE_DIRECTORY_LOG", dirname(__DIR__, 1) . '/storage/logs/'); 
define ("BASE_MAIL_LOG"     , 'xscblkzznalb@internetkeno.com'); 

/**
    *-----
    * REQUIRE VENDOR AUTOLOADING AND SYSTEM
    * @return
    *-----
*/

require_once (__ROOT__. "/vendor/autoload.php"); 

/**
    *-----
    * SYSTEM TESTING
    * @return
    *-----
*/

$message = 'Initial commit message';
echo "\n Log: " . \Libraries\Log::message($message);
