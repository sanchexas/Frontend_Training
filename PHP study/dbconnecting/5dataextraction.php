<?php
require_once '1login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);
$zapros_sel = "SELECT * FROM cats";
$result = $conn->query($zapros_sel);
if(!$result) die ("Сбой при доступе к базе данных: " . $conn->error());
$rows = $result-> num_rows;
echo "<table>
<tr>
    <th>ID</th>
    <th>Family</th>
    <th>Name</th>
    <th>Age</th>
</tr>";
for($j = 0; $j <$rows; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "<tr>";
    for($k = 0; $k < 4; ++$k) echo "<td>$row[$k]</td>";
    echo "</tr>";
}
echo "</table>";
?>