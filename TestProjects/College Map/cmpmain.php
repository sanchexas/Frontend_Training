<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cmp.css" rel="stylesheet">
    <title>College Map</title>
</head>
<body>
    
    <?php
        include 'db.php';
    ?>
    <?php
        if( isset($_SESSION['logged_user']) ) : 
    ?>
    <h1>Авторизован</h1>
    
    <?php  else : ?>
    <div class="greet_card">
        <div class="title">
            <img class="logo" src="img/cologo.png"
            <pre>
                Добро пожаловать!
                Отделение "ОУИТ"
            </pre>
        </div>
        <br>
        <div class="sign">
            <a href="login.html">Вход</a>
            <br>
            <p>или</p>
            <a class="sign_up" href="signup.html">Регистрация</a>
        </div>
        
    </div>
    <?php endif; ?>

</body>
</html>
