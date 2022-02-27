<?php
    require "db.php";
    $data = $_POST;

    if(isset($data['do_login']) ){
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['login']));
        if( $user){
            if( password_verify($data['password'], $user->password)){
                echo '<a href="cmpmain.php">главная</a>';
                $_SESSION['logged_user'] = $user;
            }else{
                $errors = 'Не верно введен пароль.';
            }
        }else{
            $errors = 'Пользователь с таким логином не найден.';
        }
        if(!empty($errors)){
            echo '<h1>a</h1>';
        }
    }
?>