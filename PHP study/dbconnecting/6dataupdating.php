<?php
require_once '1login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$zapros_upd = "UPDATE cats SET name='Charlie'  WHERE name='Charly'";
$result = $conn->query($zapros_upd);

if(!$result){
    die("Сбой при доступе к базе данных: " . $conn->error());
}else{
    echo "Данные обновлены";
}
?>