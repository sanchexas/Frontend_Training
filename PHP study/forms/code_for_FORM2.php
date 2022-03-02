<?php

if(isset($_POST['definition'])){
    $definition = $_POST['definition'];
}else{
    $definition = NULL;
}

if($definition!= NULL){
    if($definition!= 'Yes'){
        echo "$definition - Yayyy! Welcome to the Gay Party!";
    }else{
        echo "$definition - HEY YO WTF YOU SHOULD TO SELECT ONE OF ANSWERS SMH!";
    }
    
}
?>