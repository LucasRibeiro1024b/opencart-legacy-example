<?php
require_once('../env.php');

// HTTP
define('HTTP_SERVER', BASE_URL . '//admin/');
define('HTTP_CATALOG', BASE_URL . '//');

// HTTPS
define('HTTPS_SERVER', BASE_URL . '//admin/');
define('HTTPS_CATALOG', BASE_URL . '//');

// DIR
define('DIR_APPLICATION', FULL_LOCATION . '//admin/');
define('DIR_SYSTEM', FULL_LOCATION . '//system/');
define('DIR_IMAGE', FULL_LOCATION . '//image/');
define('DIR_STORAGE', FULL_LOCATION . '//storage/');
define('DIR_CATALOG', FULL_LOCATION . '//catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'ellistestedev');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');