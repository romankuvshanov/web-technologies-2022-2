<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
    // Задание 4
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

</body>
</html>