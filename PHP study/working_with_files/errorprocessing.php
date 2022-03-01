<?php
function error_handler($level, $message){
    switch($level){
        case 2: $string = 'Attention!';
         break;
        case 8: $string = 'Warning!';
         break;
        default: $string = 'Error';
    }
    echo "<b>$string</b><br>$message<hr>";
}

set_error_handler('error_handler');

echo($var);
$file = fopen('nonsuch.txt', 'r');

$number = 2;
if($number >= 1){
    trigger_error('Value must be 1 or less!');
}
?>