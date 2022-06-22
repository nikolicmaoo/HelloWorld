<?php
    include "ponavljajuce/header.php"
?>
<?php

          include "funkcije/init.php";
          ?>
          
          <form method="POST" class="registracija">
          <h1 style="color: white;">Postani naš član! Registruj se!</h1> <br>
            <input type="text" name="firstname" placeholder="Ime" required style="padding: 15px; width:300px; font-size: large;"> <br><br>
            <input type="text" name="lastname" placeholder="Prezime" required style="padding: 15px; width:300px; font-size: large;"> <br> <br>
            <input type="text" name="username" placeholder="Korisničko ime" required style="padding: 15px; width:300px; font-size: large;"> <br> <br>
            <input type="email" name="emai" placeholder="Email" required style="padding: 15px; width:300px; font-size: large;"> <br> <br>
            <input type="password" name="password" placeholder="Lozinka" required style="padding: 15px; width:300px; font-size: large;"> <br> <br>
            <input type="password" name="confirm_password" placeholder="Ponovite lozinku" required style="padding: 15px; width:300px; font-size: large;"> <br><br><br>
            <input type="submit" name="register-submit" placeholder="Registruj se" value="Registruj se" class="dugme">
            <?php
            validate_user();
            display_message();
            ?>
          </form>
           
    <?php
        include "ponavljajuce/footer.php"
    ?>