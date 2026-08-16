<?php
use Webazex\Nexus\Core\Core;
if(file_exists(get_template_directory() . DIRECTORY_SEPARATOR . 'autoload.php')){
    require_once get_template_directory() . DIRECTORY_SEPARATOR . 'autoload.php';
}
echo "<pre>";
//echo NEXUS_DIR."\n \r";
//echo NEXUS_DIR_URI."\n \r";
//echo NEXUS_INCLUDES_DIR."\n \r";
//echo NEXUS_CORE_DIR."\n \r";
Core::test();
echo "</pre>";
