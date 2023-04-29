<?php
// Задание 1
$i = 0;
do {
    echo $i;
    if ($i == 0) {
        echo ' – это ноль.';
    } elseif ($i % 2 != 0) {
        echo ' – нечётное число.';
    } elseif ($i % 2 == 0) {
        echo ' – чётное число.';
    }
    $i++;
    echo '<br>';
} while ($i <= 10);
echo '<br>';

// Задание 2
$districtsAndCities = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Скопин', 'Ряжск']
];

foreach ($districtsAndCities as $districtName => $cities) {
    echo  $districtName . ':<br>';
    echo implode(', ', $cities) . '.<br>';
}
echo '<br>';

// Задание 3
$transliterationArray = [
    'a' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'x',
    'ц' => 'cz',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shh',
    'ъ' => '',
    'ы' => 'y',
    'ь' => '',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya'
    ];

function transliterate($input) {
    global $transliterationArray;
    return str_replace(array_keys($transliterationArray), array_values($transliterationArray), mb_strtolower($input));
}

echo transliterate('привет');
echo '<br>';

// Задание 6
$districtsAndCities = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Скопин', 'Ряжск']
];

function isWordStartingWithK($word) {
    return mb_strtolower(mb_substr($word, 0, 1)) == 'к';
}

foreach ($districtsAndCities as $districtName => $cities) {
    echo  $districtName . ':<br>';
    echo implode(', ', array_filter($cities, 'isWordStartingWithK')) . '.<br>';
}
echo '<br>';
?>