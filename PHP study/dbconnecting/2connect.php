<?php
require_once '1login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error){
    die($conn-connect_error);
}else{
    echo "соединение с БД $db установлено!!!!!!!!!";
}
$result = $conn->query( "SELECT * FROM classics");
if(!$result){
    die ($conn-> error);
}else{
    echo "Данные извлечены и помещены в объект с именем result <br>";
}
echo "результаты запроса: <br><br>";
$rows = $result->num_rows;
for($j = 0 ; $j < $rows ; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQL_ASSOC);
    echo 'Author: ' . $row['author'] . '<br>';
    echo 'Title: ' . $row['title'] . '<br>';
    echo 'Category: ' . $row['category'] . '<br>';
    echo 'Year: ' . $row['year'] . '<br>';
    echo 'ISBN: ' . $row['isbn'] . '<br>';
}
$result->close();
$conn->close();

?>