<?php
if(!empty ($_POST['comment'])){
    $comment = $_POST['comment'];
}else{
    $comment = NULL;
    echo 'Необходимо указать комментарий';
}
?>