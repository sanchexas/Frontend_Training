<?php
require_once '1login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$zapros_ins1 = "INSERT INTO cats VALUES(NULL, 'Ahhh', 'Yeahh', 3";
$result = $conn->query($zapros_ins1);
$insertID=$conn->insert_id;

if(!$result){
    die("Сбой при доступе к базе данных: " . $conn->error());
}else{
    echo "Новая запись добавлена в бд, ее номер:  $insertID";
}

$zapros_ins2 = "INSERT INTO owners VALUES($insertID, 'Sergey', 'Sanches'";
$result = $conn->query($zapros_ins2);

if(!$result){
    die("Сбой при доступе к базе данных: " . $conn->error());
}else{
    echo "Запись, связанная с номером $insertID добавлена в бд";
}
?>