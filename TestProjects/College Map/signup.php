<?php
    require "db.php";

    $data = $_POST;
    if(isset($data['do_signup'])){
        $errors = array();
        if(trim($data['login']) == ''){
            $errors[] = 'Введите логин.';
        }
        if(trim($data['phone']) == ''){
            $errors[] = 'Введите телефон.';
        }
        if($data['password'] == ''){
            $errors[] = 'Введите пароль.';
        }
        if($data['repeat_password'] != $data['password']){
            $errors[] = 'Повторный пароль введён неверно.';
        }
        if(empty($errors)){
            $user = R::dispense('users');
            $user->login = $data['login'];
            $user->phone = $data['phone'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
            R::store($user);
        }
        if(R::count('users', "login = ?", array($data['login'])) > 0){
            $errors[] = 'Пользователь с таким логином уже существует.';
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
        if(R::count('users', "phone = ?", array($data['phone'])) > 0){
            $errors[] = 'Пользователь с таким телефоном уже существует.';
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
        else{
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
    }
?>