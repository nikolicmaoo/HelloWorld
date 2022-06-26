<?php
    include "ponavljajuce/logheader.php";
    user_restriction();
?>
<?php create_post2(); ?>
<div data-aos="fade-up" class="feed">
    <form method="POST">
        <h1 style="color:black ;">Imaš nešto uzbudljivo da kažeš?</h1>
        <h1 style="color: black;">Kreiraj objavu!</h1><br>
        <textarea name="post_content" cols="60" rows="10" placeholder="Kreiraj objavu" style="color: black; padding:15px;"></textarea><br><br>
        <input type="submit" value="Objavi" name="submit" class="dugme2">
    </form>
    </div><br><br>
    <div class="greska">
    <?php display_message(); ?>
    </div><br><br><br>
    <?php fetch_all_posts2(); ?>
<?php
    include "ponavljajuce/logfooter.php"
?>