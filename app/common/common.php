<?php

// Старт сессии пользователя
session_start();

// Подключение конфигурационного файла сайта
require_once('config.php');

// Настройка локали
setlocale(LC_ALL, LOCALE, LOCALE_ALT);
setlocale(LC_ALL, '.' . CODEPAGE);
// Настройка часового пояса по умолчанию
date_default_timezone_set('UTC');

// Подключение оболочки Базы Данных
require_once(APP . '/common/db.php');
// Подключение к Базе Данных
db_connect(DB);

// Настройка кодировки страниц
header('Content-type: text/html; charset=' . CODEPAGE);
// Настройка доступа с HTTP части сайта к HTTPS части (для отправки форм через HTTPS)
header('Access-Control-Allow-Origin: http://' . SITE_DOMAIN);


// Подключение библиотеки вспомогательных функций
require_once(APP . '/common/funcs.php');


?>
