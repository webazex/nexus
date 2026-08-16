<?php
declare(strict_types=1);
if ( ! defined( 'ABSPATH' ) ) {
    header( 'HTTP/1.1 403 Forbidden' );
    exit( 'Direct access denied.' );
}
const NEXUS_DS = DIRECTORY_SEPARATOR;
define( 'NEXUS_DIR', get_template_directory() . NEXUS_DS);
define( 'NEXUS_DIR_URI', get_template_directory_uri());
const NEXUS_CORE_DIR = NEXUS_DIR . 'Core' . NEXUS_DS;
const NEXUS_INCLUDES_DIR = NEXUS_CORE_DIR . 'includes' . NEXUS_DS;