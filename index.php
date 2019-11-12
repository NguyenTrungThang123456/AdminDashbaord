<?php


define('BASE_PATH', __DIR__);
define('APP_PATH', BASE_PATH . '/frontend');
<<<<<<< HEAD
define('BASE_URL', 'http://localhost:8888/ProjectSEM2');
=======
define('BASE_URL', 'http://localhost:8889/ProjectSEM2');
>>>>>>> de4691728b170599bf0480123afaedefbf895883
define('CSS_URL', BASE_URL . '/public/css/');
define('IMG_URL', BASE_URL . '/public/');
require BASE_PATH . '/config/constant.php';
require BASE_PATH . '/core/Common.php';

load_app();
