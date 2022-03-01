<?php
$filestream = fopen('example.txt', 'r')
or die('ERROR: Impossible to open this file :-)');

while($char = fgetc($filestream)){
    echo $char.' * ';
}

fclose($filestream);
?>