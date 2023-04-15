<?php
// Задание 1
$a = 1;
$b = 2;

if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} elseif ($a < 0 && $b < 0) {
    echo $a * $b;
} elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)) {
    echo $a + $b;
}
echo PHP_EOL;

// Задание 2
$a = 3;
switch ($a) {
    case 0:
        echo '0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15';
        break;
    case 1:
        echo '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15';
        break;
    case 2:
        echo '2 3 4 5 6 7 8 9 10 11 12 13 14 15';
        break;
    case 3:
        echo '3 4 5 6 7 8 9 10 11 12 13 14 15';
        break;
    case 4:
        echo '4 5 6 7 8 9 10 11 12 13 14 15';
        break;
    case 5:
        echo '5 6 7 8 9 10 11 12 13 14 15';
        break;
    case 6:
        echo '6 7 8 9 10 11 12 13 14 15';
        break;
    case 7:
        echo '7 8 9 10 11 12 13 14 15';
        break;
    case 8:
        echo '8 9 10 11 12 13 14 15';
        break;
    case 9:
        echo '9 10 11 12 13 14 15';
        break;
    case 10:
        echo '10 11 12 13 14 15';
        break;
    case 11:
        echo '11 12 13 14 15';
        break;
    case 12:
        echo '12 13 14 15';
        break;
    case 13:
        echo '13 14 15';
        break;
    case 14:
        echo '14 15';
        break;
    case 15:
        echo '15';
        break;

}
echo PHP_EOL;

// Задание 3
function addition($a, $b)
{
    return $a + $b;
}

function subtraction($a, $b)
{
    return $a - $b;
}

function multiplication($a, $b)
{
    return $a * $b;
}

function division($a, $b)
{
    return $a / $b;
}

// Задание 4
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case '+':
            return addition($arg1, $arg2);
        case '-':
            return subtraction($arg1, $arg2);
        case '*':
            return multiplication($arg1, $arg2);
        case '/':
            return division($arg1, $arg2);
    }
    return 0;
}
echo mathOperation(3, 5, '*');
echo PHP_EOL;

// Задание 6
function power($val, $pow) {
    if ($pow == 1) {
        return $val;
    }
    else {
        return  $val * power($val, $pow - 1);
    }
}

echo power(2, 5);
echo PHP_EOL;

?>
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
<!-- Задание 5 -->
<p>Первый способ вывода: <?php echo date('Y'); ?></p>
<?php require('site.php') ?>
<?php
$currentYear = date('Y');
$content = file_get_contents('site.html');
$content = str_replace('{{ year }}', $currentYear, $content);
echo $content;
?>
</body>
</html>