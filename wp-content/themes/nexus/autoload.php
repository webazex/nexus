<?php
/**
 * Nexus Autoloader
 * PHP Version: 8.3
 */
declare(strict_types=1);

use Webazex\Nexus\Core\Logger\Logger;

if ( ! defined( 'ABSPATH' ) ) {
    header( 'HTTP/1.1 403 Forbidden' );
    exit( 'Direct access denied.' );
}

if(file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'paths.php')) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'paths.php';
}else{
    Throw new Exception("Not found Core paths", 1);
}

if(file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'helpers.php')) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'helpers.php';
}else{
    Throw new Exception("Not found Core critical helpers", 2);
}
require_once NEXUS_CORE_DIR.'Logger'.NEXUS_DS.'Logger.php';

spl_autoload_register(function ($class) {
    try {
        $nexusNamespace = "Webazex\\Nexus\\";
        if (str_starts_with($class, $nexusNamespace)) {
            $cleanedStr = str_replace($nexusNamespace, '', $class);
            $fixedStr = str_replace("\\", NEXUS_DS, $cleanedStr.'.php');
            if (!file_exists(NEXUS_DIR.$fixedStr)) {
                Throw new \Exception("Nexus file $class not found", 3);
            }
            require_once NEXUS_DIR.$fixedStr;
            if(!isEntity($class)) {
                Throw new \Exception("File included, but Nexus entity $class not found", 4);
            }
        }
    } catch (\Throwable $e) {
        Logger::error($e->getMessage(), $e->getCode());
    }
});