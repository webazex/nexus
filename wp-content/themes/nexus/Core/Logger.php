<?php

namespace Webazex\Nexus\Core;
use Webazex\Nexus\Core\Enums\LogLevel;
class Logger
{
    static private string $nexusLogDir = "";

    public function __construct()
    {
        self::$nexusLogDir = WP_CONTENT_DIR .NEXUS_DS. 'logs'. NEXUS_DS;

    }

    public function log(LogLevel $level, string $message, int $code = 0): void {
        $formattedMessage = sprintf("[%s] %s\n", date('Y-m-d H:i:s'),
            'code: '.$code. ' Message: '.$message);
        if(!is_dir(self::$nexusLogDir)) {
            mkdir(self::$nexusLogDir, 0755, true);
        }
        file_put_contents(self::$nexusLogDir.date("Y-m-d").'-'.$level->getLevelName(), $formattedMessage, FILE_APPEND);
    }
}