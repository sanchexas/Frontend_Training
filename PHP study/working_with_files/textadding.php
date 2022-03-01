<?php
$info = "\r\n\r\n\r\n\tBy Ammy O Connor. 2020";
$filename = 'fwrite.txt';

$filestream = fopen($filename, 'a')
or die('ERROR: Impossible to open this file :-)');

$num = fwrite($filestream, $info);
if($num){
    echo "$num bytes written to file $filename";
}

fclose($filestream);
?>