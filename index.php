<?php


define('BASE_PATH', __DIR__);
define('APP_PATH', BASE_PATH . '/frontend');
define('BASE_URL', 'http://localhost:8889/ProjectSEM2');
define('CSS_URL', BASE_URL . '/public/css/');
define('IMG_URL', BASE_URL . '/public/');
require BASE_PATH . '/config/constant.php';
require BASE_PATH . '/core/Common.php';

load_app();
