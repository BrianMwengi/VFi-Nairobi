<?php
// MUTE NOTICES
error_reporting(E_ALL & ~E_NOTICE);

// LIB PATH
// ! MANUALLY CHANGE THIS IF PHP IS THROWING FILE-NOT-FOUND ERRORS !
 define("ROOT_PATH", realpath(dirname(__FILE__)));
 define("BASE_URL", "http://localhost:/VFi Nairobi");
// DATABASE SETTINGS
// ! CHANGE THESE TO YOUR OWN !
define('DB_HOST', 'localhost');
define('DB_NAME', 'vfi nairobi');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
?>