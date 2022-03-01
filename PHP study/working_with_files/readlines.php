<?php
    $filestream = fopen('example.txt', 'r')
    or die('ERROR: Impossible to open this file :-)');

    while(!feof($filestream)){
        echo fgets($filestream).'<br>';
    }
    fclose($filestream);
?>