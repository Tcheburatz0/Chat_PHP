<?php
require 'app_config.php';


// Проверка соединения

//or die("<p>Ошибка подключения к базе данных: " .
 //   mysqli_error() . "</p>");
//echo "<p>Вы подключились к MySQL!</p>";

$mysqli = new mysqli(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD,DATABASE_NAME);
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error."<p>Ошибка при выборе базы данных: " . DATABASE_NAME .
        mysqli_error() . "</p>");
} else {echo "<p>Вы подключены к MySQL с использованием базы данных " . DATABASE_NAME . "</p>";}
if (mysqli_connect_error()) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
?>