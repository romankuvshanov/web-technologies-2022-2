<?php
// Задание 5
$menu = [
    'О нас', 'Чем заняться', 'Где остановиться', 'Подпункты' => ['Подпункт 1', 'Подпункт 2', 'Подпункт 3']
];

function printArray($arr) {
    echo '<ul>';
    foreach ($arr as $key => $menuItem) {
        if (is_array($menuItem)) {
            echo '<li>' . $key;
            printArray($menuItem);
            echo '</li>';
        } else {
            echo '<li>' . $menuItem . '</li>';
        }
    }
    echo '</ul>';
}

printArray($menu);
?>