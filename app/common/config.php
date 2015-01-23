<?php

//
// Общие настройки сайта
//

// Кодовая страница сайта
define('CODEPAGE', 'utf-8');
// Домен сайта
define('SITE_DOMAIN', 'order_book');

// Размещение сайта в поддиректории корневой директории веб-сервера
define('WWW', '');
//define('WWW', '/subdir');


//
// Настройки подключения к БД
//

define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'order_book');
define('DB_USER', 'order_book');
define('DB_PASS', 'a6WyYSvq5y');
define('DB_PREFIX', '');
define('DB_CODEPAGE', 'utf8');


//
// Прочие настройки
//

// Определение корневой директории сайта
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . WWW);

// Настройка вспомогательных директорий
define('APP', ROOT . '/app');

// Настройка вспомогательных директорий
define('LOG', ROOT . '/log');
define('IMG', ROOT . '/public/images');
define('IMG_WWW', WWW . '/images');


?>