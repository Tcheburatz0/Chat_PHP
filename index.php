<?php
include 'database_connection.php';
$page = $_GET['page'];
echo '<form method="POST" action="addmsgtochat.php">
Имя: <br/>
<input type = "text" name = "name"></br>
Текст сообщения: <br/>
<input type =text" name="text"><br/><br/>
<input type="submit">
</form>
';
if (!$page) {
    $page = 1;
}
if ($page==1){
    $qwerty =$mysqli->query("SELECT * FROM `text` ORDER BY `date` DESC LIMIT 10");
}
$limit=$page*10-10;
if ($page>1) {
    $qwerty =$mysqli->query("SELECT * FROM `text` ORDER BY `date` DESC LIMIT $limit,10");
}
while($row=mysqli_fetch_array($qwerty)) {
    echo '<a href="#">' . $row['name'].'</a>  ';
    echo $row['text'] . '<br/';
    echo '<hr>';
}
$qwerty_all = $mysqli->query("SELECT * FROM `text` ORDER BY `date`");
$rows_all = mysqli_num_rows($qwerty_all);
$rows = ceil($rows_all/10);
if ($rows>1) {
    for ($i = 1; $i <= $rows; $i++) {
        echo '<a href="?page=' . $i . '">' . $i . '</a>';
    }
}
?>