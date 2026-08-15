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
if(file_exists(__DIR__ . DIRECTORY_SEPARATOR.'Core'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'pathes.php')) {
    require_once __DIR__ . DIRECTORY_SEPARATOR.'Core'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'pathes.php';
}else{
    Throw new Exception("Not found Core pathes", 500);
}
spl_autoload_register(function ($class) {
    try {
        $nexusNamespace = "Webazex\\Nexus\\";
        if (str_starts_with($class, $nexusNamespace)) {
            $cleanedStr = str_replace($nexusNamespace, '', $class);
            $fixedStr = str_replace("\\", DS, $cleanedStr.'.php');
            if (!file_exists(NEXUS_DIR.$fixedStr)) {
                Throw new \Exception("Nexus class $class not found", 500);
            }
            require_once NEXUS_DIR.$fixedStr;
        }
    } catch (\Throwable $e) {
        echo '<pre>';
        echo $e->getMessage()."\n \r";
        echo $e->getCode()."\n \r";
        echo $e->getTraceAsString()."\n \r";
    }
});