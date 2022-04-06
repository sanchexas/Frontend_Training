<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Mukta&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1&display=swap" rel="stylesheet" /><link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Mukta&display=swap" rel="stylesheet" />
    <script src="script/authuser.js"></script>
    <link rel="stylesheet" href="styles/authuser.css">
    <title>Forum - BrokEdu</title>
</head>
<body id="background">
    
   <header>
       <a href="">
         <div class="logo">
            <img src="img/logo.svg" alt="logo">
        </div>
       </a> 
       <nav>
            <div>
                <a class="nav-links" href="#">About</a>
            </div>
            <div>
                <a class="nav-links" href="studservice.html">StudService</a>
            </div>
            <div>
                <span class="selected">Forum</span>
            </div>
            <div>
                <a class="nav-links" href="#">Messanger</a>
            </div>
            <div class="profile">
            <?php 
                        if($_COOKIE['user'] == ''):
                    ?>
                <?php else: ?>
                    <a class="nav-links" href="#"><?=$_COOKIE['user']?></a>
                <?php endif; ?>
                
                
                <div class="avatar">

                </div>
            </div>
            <a href="exit.php">
                Log out
            </a>
        </nav>
   </header>
   <main>
        <div class="actions">
            <a href="" class="action-link">
                <div>
                    <img src="img/write.svg" width="20px" height="20px" alt="">
                    <span>Write an article</span> 
                </div>
            </a>
            <a href="" class="action-link">
                <div>
                    <img src="img/myarticles.svg" width="20px" height="20px" alt="">
                    <span>My articles</span> 
                </div>
            </a>
            <a href="" class="action-link">
                <div>
                    <img src="img/favorite.svg" width="20px" height="20px" alt="">
                    <span>Favorite</span> 
                </div>
            </a>
        </div>
        <div class="content">
            <!-- Forum Content (Articles) -->
            
        </div>
   </main>
   <footer>
        <div class="contacts">
            <h2>BrokEdu</h2>
            <a href="">+7-915-453-50-06</a>
        </div>
        <div class="social-media">
            <a href=""><img src="img/vk.svg" width="20px" height="20px" alt=""></a>
            <a href=""><img src="img/telega.svg" width="20px" height="20px" alt=""></a>
            <a href=""><img src="img/insta.svg" width="20px" height="20px" alt=""></a>
        </div>
   </footer>
   
</body>
</html>