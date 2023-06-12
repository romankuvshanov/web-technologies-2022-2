<?php
// Задание 2

function getDb()
{
    static $db = null;
    if (is_null($db)) {
        $db = @mysqli_connect(HOST, USER, PASS, DB) or die("Could not connect: " . mysqli_connect_error());
    }
    return $db;
}

function getAssocResult($sql)
{
    $result = @mysqli_query(getDb(), $sql) or die(mysqli_error(getDb()));

    $array_result = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $array_result[] = $row;
    }

    return $array_result;
}