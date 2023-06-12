<?php
include "config/config.php";

$page = 'index';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$params = [];

switch ($page) {
    case 'index':
        $params['title'] = 'Главная';
        $params['test'] = 'Тестовая запись';
        break;
    case 'catalog':
        $params['title'] = 'Каталог';
        $params['catalog'] = getCatalog();
        break;
    case 'about':
        $params['title'] = 'О нас';
        $params['phone'] = '+7 495 123 23 23';
        break;
    case 'product':
        if (isset($_GET['productId'])) {
            $params['product'] = getProduct($_GET['productId']);
            $params['reviews'] = getReviews($_GET['productId']);
        }
        break;
    case 'apicatalog':
        echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
        die();

    default:
        echo "404";
        die();
}

// Задание 1 и 2
function getCatalog()
{
    return getAssocResult('SELECT * FROM goods ORDER BY id DESC');
}

function getProduct($productId)
{
    return getAssocResult('SELECT * FROM goods WHERE id=' . $productId . ' ORDER BY id DESC')[0];
}

function getReviews($productId)
{
//    TODO: Экспорт БД
    return getAssocResult('SELECT * FROM reviews WHERE productId=' . $productId . ' ORDER BY id DESC');
}

function renderTemplate($page, $params = [])
{

//    foreach ($params as $key => $value) {
//            $$key = $value;
//        }
    extract($params);

    ob_start();
    include TEMPLATES_DIR . $page . ".php";
    return ob_get_clean();
}

//renderTemplate('index', $params);

echo renderTemplate(LAYOUTS_DIR . 'main', [
    'title' => $params['title'],
    'menu' => renderTemplate('menu'),
    'content' => renderTemplate($page, $params)
]);
