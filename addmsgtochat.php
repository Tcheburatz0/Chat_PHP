<?php
include 'database_connection.php';
$text = $_POST['text'];
$name = $_POST['name'];
$date = date("y-m-d H:i:s");
if ($name&$text) {
    $query = $mysqli->query("INSERT INTO text (name,text,date) VALUES ('{$name}', '{$text}','{$date}');");
    echo '<script type="text/javascript">';
    echo 'window.location.href="index.php";';
    echo '</script>';
} else {
    echo '<script type="text/javascript">';
    echo 'window.location.href="index.php";';
    echo '</script>';
}
?>
