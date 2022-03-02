<?php
    require_once '1login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn->connect_error) die($conn->connect_error);

    $zapros = "SELECT * FROM customers";
    $result = $conn->query($zapros);

    if(!$result) die("Сбой при доступе к базе данных: " . $conn->error);
    $rows = $result->num_rows;
    for($j = 0; $j < $rows; ++$j){
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_NUM);
        echo "Покупатель $row[0] купил книгу: ISBN $row[1]<br>";
        $podzapros = "SELECT * FROM classics WHERE isbn='$row[1]'";
        $subresult = $conn->query($podzapros);
        if(!$subresult) die ("Сбой при доступе к базе данных: ". $conn->error);
        $subrow = $subresult->fetch_array(MYSQLI_NUM);
        echo "'$subrow[1]' автор $subrow[0]<br>";
    }
?>