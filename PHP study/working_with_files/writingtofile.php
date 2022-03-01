<?php
$poem = "\r\n\tThe plates will still shift";
$poem .= "\r\n\tand the clouds will still spew.";
$poem .= "\r\n\tThe sun will slowly rise";
$poem .= "\r\n\tand the moon will follow too. ))";

$filename = 'fwrite.txt';

$filestream = fopen($filename, 'w')
or die('ERROR: Impossible to open this file :-)');

$num = fwrite($filestream, $poem);
if($num){
    echo "$num bytes written to file $filename";
}
fclose($filestream);
?>