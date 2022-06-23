<?php
    include "funkcije/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/icon.png">
</head>
<body style="background-color: black;">
    <header class="header">
        <nav class="navbar navbar-style">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#micon">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                     <a href="index.php"><img class="logo" src="/images/logo.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="micon">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="log.php">Profil</a></li>
                    <li><a href="#">Development</a></li>
                    <li> <a href="#">Feed</a></li>
                    <li> <a href="logout.php">Izloguj se</a> </li>
                </ul>
                </div>
            </div>
        </nav>
        </header>
            <button onclick="topFunction()" id="myBtn" title="Go to top"></button>
        <script>
            AOS.init();
          </script>
<h1>
    Hello
</h1>
<div data-aos="fade-up">
          <footer class="futer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="index.php">
        <img src="/images/logo.png" alt="logo" class="logo">
                        </a></div>
              <div class="col-md-4">
                  <a href="log.php" style="text-decoration:none; color:white;">Profil</a><br>
                  <a href="#" style="text-decoration:none; color:white;">Development</a><br>
                  <a href="#" style="text-decoration:none; color:white;">Feed</a><br>
                  <a href="logout.php" style="text-decoration:none; color:white;">Izloguj se</a>
            </div>
            <div class="col-md-4">
                <p style="color: white;">Zapratite nas na društvenim mrežama!</p> <br>
                <a href="https://www.instagram.com" target="_blank">
                    <img src="/images/insta.png" alt="insta" style="width:30px; height:30px;">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                    <img src="/images/fb.png" alt="fb" style="width:30px; height:30px;">
                </a>
                <a href="https://www.tiktok.com" target="_blank">
                    <img src="/images/tiktok.png" alt="tiktok" style="width:30px; height:30px;">
                </a>
                <a href="https://www.github.com" target="_blank">
                    <img src="/images/github.png" alt="github" style="width:30px; height:30px;">
                </a>
            </div>
            </div>
        </div><br><br>
        <p style="color:white; text-align: center; font-size: larger;">&copy;; All rights reserved</p>
        <p style="color:white; text-align:center; font-size: larger;">Designed and developed by <a href="https://www.instagram.com/nikolicmaoo/?hl=en" target="_blank" style="text-decoration: none; color:green;">Nikolć</a></p>
        </footer>
          </div>
          <script src="/main.js"></script>
</body>
</html>
