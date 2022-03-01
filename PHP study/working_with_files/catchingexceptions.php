<?php
function check_size($num){
    if($num < 10){
        throw new Exception("Value: $num<br>Value must be more than 10.");
    }
}
function check_parity($num){
    if($num%2!==0){
        throw new CustomException("Value: $num<br>Value must be even.");
    }
}
class CustomException extends Exception{
    public function get_details(){
        $details = 'File: '.$this->getFile().
        '<br>Line: '.$this->getLine().
        '<br>'.$this->getMessage();
        return $details;
    }
}
try{
    check_size(5);
}catch(Exception $e){
    echo '<b>Size exclusion!</b><br>'.$e->getMessage().'<hr>';
}
try{
    check_parity(5);
}catch(CustomException $e){
    echo '<b>Equality elimination.</b><br>'.
    $e->get_details().'<hr>';
}
?>