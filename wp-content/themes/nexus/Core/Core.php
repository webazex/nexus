<?php

namespace Webazex\Nexus\Core;
use Webazex\Nexus\Core\Enums\LogLevel;
use Webazex\Nexus\Core\Logger\Logger;

class Core
{
    public static function test(){
        Logger::warning("Soo");
        Logger::error("fuck");
        Logger::info("It's working");
    }
}