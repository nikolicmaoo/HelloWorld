<?php
    include "ponavljajuce/logheader.php";
    user_restriction();
?>
<?php create_post(); ?>

    <div data-aos="fade-up" class="development">
    <form method="POST">
        <h1>Imaš pitanje u vezi developmenta?</h1>
        <h1>Kreiraj objavu!</h1><br>
        <textarea name="post_content" cols="60" rows="10" placeholder="Kreiraj objavu" style="color: black; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; padding:15px;"></textarea><br><br>
        <input type="submit" value="Objavi" name="submit" class="dugme">
    </form>
    </div><br><br>
    <div class="greska">
    <?php display_message(); ?>
    </div><br><br><br>
    <?php fetch_all_posts(); ?>
<?php
    include "ponavljajuce/logfooter.php"
?>