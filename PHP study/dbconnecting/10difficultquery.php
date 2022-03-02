<?php

require_once '1login.php';
$conn=new mysqli($hn, $un, $pw, $db);
if($conn->connect_error)
{
	die ($conn->connect_error);
}

$zapros="SELECT name, customers.ISBN, Title, Author FROM customers INNER JOIN classics ON customers.ISBN=classics.ISBN;";
$result=$conn->query($zapros);
if(!$result)
{
	die ("Сбой при доступе к базе данных: " . $conn->error);
}
$rows=$result->num_rows;

for($j=0; $j<$rows; ++$j)
{
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_ASSOC);
	echo "Покупатель ". $row['name']." купил книгу: IBSN " .$row['ISBN']. "<br>";
	echo $row['Title']." автор ".$row['Author']."<br>";
}
?>