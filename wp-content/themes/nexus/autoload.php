<?php
/**
 * Nexus Autoloader
 * PHP Version: 8.3
 */
declare(strict_types=1);
if ( ! defined( 'ABSPATH' ) ) {
    header( 'HTTP/1.1 403 Forbidden' );
    exit( 'Direct access denied.' );
}

use Webazex\Nexus\Core\Logger;
use Webazex\Nexus\Core\Enums\LogLevel;

if(file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'paths.php')) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'paths.php';
}else{
    Throw new Exception("Not found Core paths", 500);
}

spl_autoload_register(function ($class) {
    try {
        $nexusNamespace = "Webazex\\Nexus\\";
        if (str_starts_with($class, $nexusNamespace)) {
            $cleanedStr = str_replace($nexusNamespace, '', $class);
            $fixedStr = str_replace("\\", NEXUS_DS, $cleanedStr.'.php');
            if (!file_exists(NEXUS_DIR.$fixedStr)) {
                Throw new \Exception("Nexus file $class not found", 1);
            }
            require_once NEXUS_DIR.$fixedStr;
            if(!class_exists($class, false)) {
                Throw new \LogicException("Nexus class $class not found", 2);
            }
            if(!enum_exists($class, false)) {
                Throw new \LogicException("Nexus enum $class not found", 3);
            }
        }
    } catch (\Throwable $e) {
       $logger = new Logger();
       $logger->log(LogLevel::ERROR, $e->getMessage(), $e->getCode());
    }
});