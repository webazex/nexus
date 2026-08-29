<?php

namespace Webazex\Nexus\Core\Logger;
use Webazex\Nexus\Core\Enums\LogLevel;

require_once(NEXUS_CORE_DIR.'Enums'.NEXUS_DS.'LogLevel.php');
class LogWriter
{
    static private string $nexusLogDir = "";

    public function __construct()
    {
        self::$nexusLogDir = WP_CONTENT_DIR .NEXUS_DS. 'logs'. NEXUS_DS;

    }

    public function write(LogLevel $level, string $message, int $code = 0, bool $stackTrace = true): void {
        $realStackTrace = ($stackTrace && ($level == (LogLevel::ERROR || LogLevel::WARNING)))? debug_backtrace() : '';

        $formattedMessage = sprintf("[%s] %s\n", date('Y-m-d H:i:s'),
            'code: '.$code. ' Message: '.$message. 'Stack trace:' . $realStackTrace);
        if(!is_dir(self::$nexusLogDir)) {
            mkdir(self::$nexusLogDir, 0755, true);
        }
        file_put_contents(self::$nexusLogDir.date("Y-m-d").'-'.$level->getLevelName(), $formattedMessage, FILE_APPEND);
    }
}