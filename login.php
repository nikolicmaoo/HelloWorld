<?php
include "ponavljajuce/header.php";

?>
<?php
include "funkcije/init.php";
?>

<div data-aos="fade-up">
    <div class="login">
        <h1 style="font-size: 60px; color:black;">Molimo Vas, ulogujte se.</h1> <br><br>
    <form method="POST">
        <input type="email" name="email" placeholder="Email adresa" required style="padding: 15px; width:300px; font-size: large; color:black;"> <br><br>
        <input type="password" name="password" placeholder="Lozinka" required style="padding: 15px; width:300px; font-size: large; color:black;"><br><br>
        <input type="submit" name="login-submit" value="Uloguj se" class="dugme">
    </form>
</div>
</div>
<div class="greska">
<?php
validate_user_login();
?>
</div>
<?php
include "ponavljajuce/footer.php"
?>