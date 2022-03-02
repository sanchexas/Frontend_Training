<?php
require_once '1login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$zapros_ins = "INSERT INTO cats VALUES(NULL, 'Bruh', 'Dummy', 5";
$result = $conn->query($zapros_ins);

if(!$result){
    die("Сбой при доступе к базе данных: " . $conn->error());
}else{
    echo "Значение вставленного ID равно " . $conn->insert_id;
}
?>