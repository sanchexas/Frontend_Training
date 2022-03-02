<?php
require_once '1login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$zapros = 
"CREATE TABLE cats
(
id SMALLINT NOT NULL AUTO_INCREMENT,
family VARCHAR(32) NOT NULL,
name VARCHAR(32) NOT NULL,
age TINYINT NOT NULL,
PRIMARY KEY (id)
)";

$result = $conn->query($zapros);
if(!$result){
    die("Сбой при доступе к базе данных: " . $conn->error);
}else{
    echo "Таблица создана";
}
?>