<?php
define('TEMPLATES_DIR', 'templates/');
define('LAYOUTS_DIR', 'layouts/');

$page = 'index';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$params = ['menuItems' => [
    ['title' => 'Главная', 'url' => '/task5/engine/'],
    ['title' => 'Каталог', 'url' => '/task5/engine/?page=catalog'],
    ['title' => 'О нас', 'url' => '/task5/engine/?page=about'],
    'Подпункты' => [
        ['title' => 'Подпункт 1', 'url' => '/task5/engine/?page=1'],
        ['title' => 'Подпункт 2', 'url' => '/task5/engine/?page=2'],
        ['title' => 'Подпункт 3', 'url' => '/task5/engine/?page=3'],
    ],
]];

switch ($page) {
    case 'index':
        $params['title'] = 'Главная';
        $params['test'] = 'Test';
        break;
    case 'catalog':
        $params['title'] = 'Каталог';
        $params['catalog'] = getCatalog();
        break;
    case 'about':
        $params['title'] = 'О нас';
        $params['phone'] = '+7 495 123 23 23';
        break;
    case 'apicatalog':
        echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
        die();
    default:
        echo "404";
        die();
}

function getCatalog()
{
    return [
        [
            'name' => 'Яблоко',
            'price' => 24,
            'image' => 'apple.png'
        ],
        [
            'name' => 'Банан',
            'price' => 1,
            'image' => 'banana.png'
        ],
        [
            'name' => 'Апельсин',
            'price' => 12,
            'image' => 'orange.png'
        ],
    ];
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
    'menu' => renderTemplate('menu', $params),
    'content' => renderTemplate($page, $params),
]);
