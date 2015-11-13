<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null :
        define('SITE_ROOT', DS.'xampp'.DS.'htdocs'.DS.'PHP_BASIC');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS. 'includes'); 

require_once(LIB_PATH.DS.'functions.php');

?>



