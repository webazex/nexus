<?php

namespace Webazex\Nexus\Core;
use Webazex\Nexus\Core\Logger;
use Webazex\Nexus\Core\Enums\LogLevel;
class Core
{
    public static function test(){
        $Logger = new Logger();
        $Logger->log(LogLevel::INFO,"Test message");
    }
}