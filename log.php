<?php
    include "ponavljajuce/logheader.php";
    user_restriction();
?>

<div class="profil">
<div class="greska">
        <?php display_message(); ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
    <div class="samoslika">
<?php

$user = get_user();

echo "<img class='profile-image' src='" . $user['profileimg'] . "'>";

user_profile_image_upload();

?>
    </div>

    <form method="POST" enctype="multipart/form-data" class="profforma"><br>
        <h1>Izaberite sliku:</h1> <br>
        <div style="align-items: center; justify-content: center; display:flex;">
        <input type="file" name="profile_image_file"> </div><br><br>
        <input type="submit" value="Sačuvaj" name="submit" class="dugme">
    </form>
</div> <hr>
<div class="col-md-6">
    <h2>Vaše ime i prezime:</h2><h3> 
    <?php
    echo $user['firstname'] , ' ' , $user['lastname'];
    ?>
    </h3><hr><br>
    <h2>Vaš username:</h2><h3> 
    <?php
    echo $user['username'];
    ?>
    </h3><hr><br>
    <h2>Vaša email adresa:</h2><h3> 
    <?php
    echo $user['email'];
    ?>
    </h3><hr>
    
</div>
        </div></div></div>
<?php
    include "ponavljajuce/logfooter.php"
?>

