<?php
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $lastname = filter_var(trim($_POST['lastname']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $city = filter_var(trim($_POST['city']),
    FILTER_SANITIZE_STRING);
    $org = filter_var(trim($_POST['org']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);
    $reppassword = filter_var(trim($_POST['reppassword']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($name) < 2 || mb_strlen($name) > 50){
        echo "Недопустимая длина имени";
        exit();
    }
    else if(mb_strlen($lastname) < 2 || mb_strlen($lastname) > 70){
        echo "Недопустимая длина фамилии";
        exit();
    }
    else if(mb_strlen($password) < 2 || mb_strlen($password) > 100){
        echo "Недопустимая длина пароля.";
        exit();
    }
    else if(mb_strlen($reppassword) != mb_strlen($password)){
        echo "Повторный пароль введен не верно.";
        exit();
    }

    $password = md5($password."ghjsfkld2345");

    $mysql = new mysqli('localhost','root','','bkd');
    $mysql->query("INSERT INTO `users` (`name`, `lastname`, `city`, `organization`, `email`, `password`)
    VALUES('$name', '$lastname', '$city', '$org', '$email', '$password')");
    $mysql->close();

    header('Location: ../login.html');
    
?>