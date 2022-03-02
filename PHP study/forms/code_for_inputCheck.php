<?php
if(!empty ($_POST['quantity'])){
    $quantity = $_POST['quantity'];
    if(!is_numeric($quantity)){
        $quantity=NULL; echo 'Количесвто нужно указать в виде числа!!!!!!!!!<br>';
    }
    if(!empty ($_POST['email'])){
        $email = $_POST['email'];
        $pattern = '/\b[\w. -]+@[\w. -]+\.[A-Za-z]{2,6}\b/';
        if(!preg_match($pattern, $email)){
            $email = NULL; echo 'Че за символы? Формат попутал?';
        }
    }
    else{
        $email = NULL; echo 'А че не указал почту?????';
    }
    if(($quantity!= NULL) && ($email!=NULL)){
        echo "Адрес email: $email<br>Количество: $quantity ";
    }
}
else
{$quantity = NULL;
echo 'Укажи количество!!!!!!!!!!!!<br>';}
?>