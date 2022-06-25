<?php
include "ponavljajuce/header.php"
?>
<?php
include "funkcije/init.php";
?>

<div data-aos="fade-up">
    <div class="login">
        <h1 style="font-size: 60px; color:black;">Molimo Vas, ulogujte se.</h1> <br><br>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required style="padding: 15px; width:300px; font-size: large; color:black; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> <br><br>
        <input type="password" name="password" placeholder="Password" required style="padding: 15px; width:300px; font-size: large; color:black; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"><br><br>
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