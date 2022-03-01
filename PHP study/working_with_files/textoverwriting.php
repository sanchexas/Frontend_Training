<?php
$filename = 'fwrite.txt';
$filestream = fopen($filename, 'a')
or die('ERROR: Impossible to open this file :-)');
fwrite($filestream, 'File is overwritten!')
fclose($filestream);
?>
?>