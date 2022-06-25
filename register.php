<?php
    include "ponavljajuce/header.php"
?>
<?php

          include "funkcije/init.php";
          ?>
          <div data-aos="fade-up">
          <form method="POST" class="registracija">
          <h1 style="color: white;">Postani naš član! Registruj se!</h1> <br>
            <input type="text" name="firstname" placeholder="Ime" required style="padding: 15px; width:300px; font-size: large; color:black; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> <br><br>
            <input type="text" name="lastname" placeholder="Prezime" required style="padding: 15px; width:300px; font-size: large; color:black; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> <br> <br>
            <input type="text" name="username" placeholder="Korisničko ime" required style="padding: 15px; width:300px; font-size: large; color:black; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> <br> <br>
            <input type="email" name="email" placeholder="Email" required style="padding: 15px; width:300px; font-size: large; color:black; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> <br> <br>
            <input type="password" name="password" placeholder="Lozinka" required style="padding: 15px; width:300px; font-size: large; color:black; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> <br> <br>
            <input type="password" name="confirm_password" placeholder="Ponovite lozinku" required style="padding: 15px; width:300px; font-size: large; color:black; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> <br><br><br>
            <input type="submit" name="register-submit" placeholder="Registruj se" value="Registruj se" class="dugme">
          </form>
          </div>
          <div class="greska">
          <?php
            validate_user();
            ?>
          </div>
    <?php
        include "ponavljajuce/footer.php"
    ?>