<?php
// HTTP
define('HTTP_SERVER', 'http://savstore.com/');

// HTTPS
define('HTTPS_SERVER', 'http://savstore.com/');

// DIR
define('MAIN_SAV', __DIR__);
define('DIR_APPLICATION', MAIN_SAV . '/catalog/');
define('DIR_SYSTEM', MAIN_SAV . '/system/');
define('DIR_IMAGE', MAIN_SAV . '/image/');
define('DIR_LANGUAGE', MAIN_SAV . '/catalog/language/');
define('DIR_TEMPLATE', MAIN_SAV . '/catalog/view/theme/');
define('DIR_CONFIG', MAIN_SAV . '/system/config/');
define('DIR_CACHE', MAIN_SAV . '/system/storage/cache/');
define('DIR_DOWNLOAD', MAIN_SAV . '/system/storage/download/');
define('DIR_LOGS', MAIN_SAV . '/system/storage/logs/');
define('DIR_MODIFICATION', MAIN_SAV . '/system/storage/modification/');
define('DIR_UPLOAD', MAIN_SAV . '/system/storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'savstore_ua');
define('DB_PASSWORD', 'falcons');
define('DB_DATABASE', 'savstore_ua');
define('DB_PORT', '3306');
define('DB_PREFIX', 'ocs_');
