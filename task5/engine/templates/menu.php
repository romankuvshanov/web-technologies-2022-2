<?php
// Задание 5
function printArray($arr)
{
    echo '<ul>';
    foreach ($arr as $key => $subArray) {
        if (is_string($key)) {
            echo '<li>' . $key;
            printArray($subArray);
            echo '</li>';
        } else {
            echo '<li><a href="' . $subArray['url'] . '">' . $subArray['title'] . '</a></li>';
        }

    }
    echo '</ul>';
}

printArray($menuItems);
?>
