<?php
$h1Text = 'Мой заголовок';
$titleText = 'Мой тайтл';
$currentYear = date("Y");

function getCurrentTimeAsString() {
    $hour = (int)date('H');
    $minute = (int)date('i');

    $hourText = '';
    $minuteText = '';

    if ($hour == 0 || ($hour >= 5  && $hour <= 20)) {
        $hourText = ' Часов ';
    } elseif ($hour == 1 || $hour == 21) {
        $hourText = ' Час ';
    }
    elseif (($hour >= 2  && $hour <= 4) || ($hour >= 22  && $hour <= 24)) {
        $hourText = ' Часа ';
    }

    if ($minute % 10 == 1) {
        $minuteText = ' Минута';
    } elseif ($minute % 10 == 2 || $minute % 10 == 3 || $minute % 10 == 4) {
        $minuteText = ' Минуты';
    } else {
        $minuteText = ' Минут';
    }

    return $hour . $hourText . $minute . $minuteText;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titleText?></title>
</head>
<body>
    <h1><?php echo $h1Text ?></h1>
    <p><?php echo $currentYear ?></p>
    <p>Текущее время: <?php echo getCurrentTimeAsString() ?></p>
</body>
</html>