<?php
// Задание 2
define('TEMPLATES_DIR', 'templates/');
define('LAYOUTS_DIR', 'layouts/');

/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'test'); // Или 'root'
define('PASS', '111-555'); // Если root, то пароль: ''
define('DB', 'catalog');

include($_SERVER['DOCUMENT_ROOT'] . "/engine/utils/db.php");