<?php
    require "db.php";
    $data = $_POST;

    if(isset($data['do_login']) ){
        $errors = array();
        $user = R::find('users', 'login = ?', array($data['login']));
        if( $user){
            if( password_verify($data['password'], $user->password)){

            }else{
                $errors = 'Не верно введен пароль.';
            }
        }else{
            $errors = 'Пользователь с таким логином не найден.';
        }
    }
?>