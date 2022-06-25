<?php
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="onama.php">O nama</a></li>
                    <li> <a href="login.php">Prijavi se</a></li>
                    <li> <a href="register.php">Registruj se</a> </li>
                </ul>
                </div>
            </div>
        </nav>
        </header>
            <button onclick="topFunction()" id="myBtn" title="Go to top"></button>
        <script>
            AOS.init();
          </script>
          <div data-aos="fade-up">
           <div class="prva">
           <h1 style="font-size: 70px ;"> Dobrodošli na Hello World <br> 
          pravo mesto za sve developere!
        </h1>
           </div>
          </div>
          <div data-aos="fade-right">
                <div class="container">
                <div class="row">
                    <h1 style="font-size: 60px; color:white; padding-top:100px; text-align:center;">
                        Sa nama možete više!
                    </h1><br><br><br>
                    <h1 style="color: white; text-align: center;">
                        Mi smo bezbedno mesto za sve developere gde se možemo družiti, pričati o developmentu ili bilo čime drugom!
                    </h1>
                   <div class="col-lg-4">
                    <div class="pitanja">
                    <img src="/images/code.png" alt="codeicon">
                    <h2>
                        Pitanja u vezi developmenta!
                    </h2>
                    </div>
                   </div>
                   <div class="col-lg-4">
                    <div class="zivota">
                    <img src="/images/face.png" alt="faceicon">
                    <h2>
                    Deljenje svakodnevnog života!
                    </h2>
                    </div>
                   </div>
                   <div class="col-lg-4">
                    <div class="sale">
                    <img src="/images/meme.png" alt="memeicon">
                        <h2>
                            Šale na svačiji račun!
                        </h2>
                   </div>
                   </div>
                </div>
                </div>
          </div>
          <div data-aos="fade-right">
            <div class="druga">
                <h1 style="font-size: 60px;">Želiš da postaneš naš član? <br> </h1><br><br><br>
                <div class="container">
                    <div class="row">
                    <div class="col-sm-6">
                        <h1>Imaš profil?</h1>
                 <a href="login.php"><br>
                    <button class="dugme">Prijavi se</button>
                 </a>
                    </div>
                    <div class="col-sm-6">
                     <h1>Nemaš profil?</h1>
                     <a href="register.php"><br>
                        <button class="dugme">Registruj se</button>
                     </a>
                    </div>
                    </div>
                </div>
            </div>
          </div>
          <div data-aos="fade-up">
          <footer class="futer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="index.php">
        <img src="/images/logo.png" alt="logo" class="logo">
                        </a></div>
              <div class="col-md-4">
                  <a href="index.php" style="text-decoration:none; color:white;">Home</a><br>
                  <a href="onama.php" style="text-decoration:none; color:white;">O nama</a><br>
                  <a href="login.php" style="text-decoration:none; color:white;">Prijavi se</a><br>
                  <a href="register.php" style="text-decoration:none; color:white;">Registruj se</a>
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
                <a href="https://github.com/nikolicmaoo" target="_blank">
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