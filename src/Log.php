<?php

/**
    *-----
    * PUBLIC LIBRARIES
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

/**
 * @package Platform
 * @subpackage Utility
 * Libraries static function often used in Cloud Data Center API's application
 */

namespace Libraries;

class Log 
{
    /**
     * Constant for the name of the before message.
     */
    const _formatDate   = "D M j H:i:s Y O";
    const _fileDate     = "Ymd";
    const _messageType  = array (
        "INFO", 
        "WARNING", 
        "STAT", 
        "TRACE", 
        "SPECIAL",
    );
    const _logTypes     = 3;
    const _destination  = array (
        'BASE_DIRECTORY_LOG' => '/storage/logs/',
        'BASE_MAIL_LOG'      => 'logs@mail.com',
    );

    /**
     * Set logs file to local
     * Set message string
     * Set BASE_DIRECTORY_LOG string
     * Set BASE_MAIL_LOG string
     * @return file log and response
     */

    public function message($message, $_messageType = 'INFO') 
    {
        $_messageType = strtoupper($_messageType);
        $_messageType = array_search($_messageType, self::_messageType);

        if (is_numeric($_messageType)) {
            $_logTypes    = self::_logTypes;
            $_destination = dirname(__DIR__) . self::_destination['BASE_DIRECTORY_LOG'];

            if (defined('BASE_DIRECTORY_LOG') != FALSE) {
                $_destination = BASE_DIRECTORY_LOG;
            }

            if (self::_messageType[$_messageType] == 'SPECIAL') {
                $_logTypes    = 1;
                $_destination = self::_destination['BASE_MAIL_LOG'];
                if (defined('BASE_MAIL_LOG') != FALSE) {
                    $_destination = BASE_MAIL_LOG;
                }
            }
            
            error_log('[' . date(self::_formatDate, time()) . '][' . self::_messageType[$_messageType]. '] '  . preg_replace('/\s\s+/', ' ', $message) . "\n", $_logTypes, $_destination . date(self::_fileDate) . '.log');

            return true;
        }

        return false;
    }
}
