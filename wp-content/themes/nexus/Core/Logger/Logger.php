<?php

namespace Webazex\Nexus\Core\Logger;
use Webazex\Nexus\Core\Enums\LogLevel;

require_once NEXUS_CORE_DIR.'Logger'.NEXUS_DS.'LogWriter.php';
require_once NEXUS_CORE_DIR.'Enums'.NEXUS_DS.'LogLevel.php';

class Logger
{
    static private ?LogWriter $writer = null;

    static private function setWriter(LogWriter $writer)
    {
        return self::$writer ??= new LogWriter();
    }

    static public function info(string $message, int $code = 0):void {
        if(is_null(self::$writer)) {
            self::$writer = self::setWriter(new LogWriter());
        }
        self::$writer->write(LogLevel::INFO, $message, $code);
    }

    static public function warning(string $message, int $code = 0):void {
        if(is_null(self::$writer)) {
            self::$writer = self::setWriter(new LogWriter());
        }
        self::$writer->write(LogLevel::WARNING, $message, $code);
    }

    static public function error(string $message, int $code = 0):void {
        if(is_null(self::$writer)) {
            self::$writer = self::setWriter(new LogWriter());
        }
        self::$writer->write(LogLevel::ERROR, $message, $code);
    }
}