<?php
$filestream = fopen('example.txt', 'r')
or die('ERROR: Impossible to open this file :-)');

// reading
echo fread($filestream, filesize('example.txt'));

//also dont forget to close the stream!
fclose($filestream);


?>