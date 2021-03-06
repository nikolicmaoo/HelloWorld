<?php


function set_message($message){
    if(!empty($message)) {
        $_SESSION['message'] = $message;
    } else {
        $message = "";
    }
}

function display_message() {
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function create_user($firstname, $lastname, $username, $email, $password) {
        $firstname = escape($firstname);
        $lastname = escape($lastname);
        $username = escape($username);
        $email = escape($email);
        $password = escape($password);
        $password = password_hash($password, algo:PASSWORD_DEFAULT);
    
        $sql = "INSERT INTO users(firstname,lastname,username,profileimg,email,password)";
        $sql .= "VALUES('$firstname','$lastname','$username','images/default.jpg','$email','$password')";
    
        confim(query($sql));
        redirect(location:"uspesno.php");
    }

function validate_user() {
    $errors = [];

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $firstname = clean($_POST['firstname']);
        $lastname = clean($_POST['lastname']);
        $username = clean($_POST['username']);
        $email = clean($_POST['email']);
        $password = clean($_POST['password']);
        $confirm_password = clean($_POST['confirm_password']);

        if(strlen($firstname) < 3) {
            $errors[] = "Vaše ime ne može sadržati manje od 3 karaktera!";
        }
        if(strlen($lastname) < 3) {
            $errors[] = "Vaše prezime ne može sadržati manje od 3 karaktera!";
        }
        if(strlen($username) < 3) {
            $errors[] = "Vaše korisničko ime ne može sadržati manje od 3 karaktera!";
        }
        if(strlen($username) > 20) {
            $errors[] = "Vaše ime ne može sadržati više od 20 karaktera!";
        }
        if(user_exists($username)) {
            $errors[] = "Već postoji korisnik sa istim korisničkim imenom";
        }
        if(strlen($password) < 8){
            $errors [] = "Lozinka ne može biti kraća od 8 karaktera!";
        }
        if($password != $confirm_password){
            $errors [] = "Lozinke se ne poklapaju!";
        }
        if(!empty($errors)){
            foreach ($errors as $error) {
                echo "<div class='alert'>" . $error . "</div>";
            }
        } else{
            create_user($firstname, $lastname, $username, $email, $password);
        }
    }
}

function clean($str) {
    return htmlentities($str);
}

function user_exists($user) {
    $user = filter_var($user);
    $query = "SELECT id FROM users WHERE username = '$user'";
    $results = query($query);

    if ($results->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function redirect($location) {
    header("location:{$location}");
    exit();
}

function validate_user_login(){
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = clean($_POST['email']);
        $password = clean($_POST['password']);

        if (empty($email)){
            $errors[] = "Email polje ne može biti prazno!";
        }
        if (empty($password)){
            $errors[] = "Polje za lozinku ne može biti prazno!";
        }

        if (empty($errors)){
            if(user_login($email, $password)){
                redirect(location:"log.php");
            } else {
                $errors[] = "Vaša email adresa ili lozinka nisu ispravne. Pokušajte ponovo!";
            }
        }

        if(!empty($errors)){
            foreach ($errors as $error) {
                echo '<div class="alert">' . $error . '</div>';
            }
        }
    }
}

function user_login($email, $password)
{
    $password = filter_var($password);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $query = "SELECT * FROM users WHERE email='$email'";
    $results = query($query);

    if ($results->num_rows == 1) {
        $data = $results->fetch_assoc();

        if (password_verify($password, $data['password'])) {
            $_SESSION['email'] = $email;
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function get_user($id = NULL)
{
    if ($id != NULL) {
        $query = "SELECT * FROM users WHERE id=" . $id;
        $results = query($query);

        if ($results->num_rows > 0) {
            return $results->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen.";
        }
    } else {
        $query = "SELECT * FROM users WHERE email='" . $_SESSION['email'] . "'";
        $results = query($query);

        if ($results->num_rows > 0) {
            return $results->fetch_assoc();
        } else {
            return "Korisnik nije pronadjen.";
        }
    }
}

function user_profile_image_upload()
{
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $target_dir = "uploads/";
        $user = get_user();
        $user_id = $user['id'];
        $target_file = $target_dir . $user_id . "." .pathinfo(basename($_FILES["profile_image_file"]["name"]), PATHINFO_EXTENSION);;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $error = "";

        $check = getimagesize($_FILES["profile_image_file"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $error = "Fajl nije slika.";
            $uploadOk = 0;
        }

        if ($_FILES["profile_image_file"]["size"] > 5000000) {
            $error = "Fajl je previse velik. Izaberite drugi.";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Samo fajlovi sa JPG, JPEG, PNG & GIF ekstenzijom su dozvoljeni.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            set_message('Greška: '. $error);
        } else {
            $sql = "UPDATE users SET profileimg='$target_file' WHERE id='$user_id'";
            query($sql);
            set_message('Slika je promenjena!');

            if (!move_uploaded_file($_FILES["profile_image_file"]["tmp_name"], $target_file)) {
                set_message('Greška: '. $error);
            }
        }

        redirect('log.php');
    }
}

function user_restriction(){
    if(!isset($_SESSION['email'])){
        redirect('login.php');
    }
}

function create_post(){
    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $post_content = clean($_POST['post_content']);

        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo '<div class="alert">' . $error . '</div>';
            }
        } else {
            $post_content = filter_var($post_content);
            $post_content = escape($post_content);
            $user = get_user();
            $user_id = $user['id'];

            $sql = "INSERT INTO posts(userid, content) ";
            $sql .= "VALUES( $user_id, '$post_content')";
            confim(query($sql));
            set_message('Dodali ste novu objavu!');
            redirect('development.php');
        }
    }   

}

function fetch_all_posts()
{
    $query = "SELECT * FROM `posts` ORDER BY `posts`.`id` DESC";
    $results = query($query);
    

    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $user = get_user($row['userid']);

            echo "<div class='post'><br><br><p><img src='" . $user['profileimg'] . "' alt=''><i><b> &nbsp;" . $user['firstname'] . " " . $user['lastname'] . "</b></i></p><br>
                    <p>" . $row['content'] . "</p><br></div><br><br>";
        }
    }
}

function create_post2(){
    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $post_content = clean($_POST['post_content']);

        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo '<div class="alert">' . $error . '</div>';
            }
        } else {
            $post_content = filter_var($post_content);
            $post_content = escape($post_content);
            $user = get_user();
            $user_id = $user['id'];

            $sql = "INSERT INTO posts2(userid, content) ";
            $sql .= "VALUES($user_id, '$post_content')";
            confim(query($sql));
            set_message('Dodali ste novu objavu!');
            redirect('feed.php');
        }
    }
}

function fetch_all_posts2()
{
    $query = "SELECT * FROM `posts2` ORDER BY `posts2`.`id` DESC";
    $results = query($query);
    

    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $user = get_user($row['userid']);

            echo "<div class='post'><br><br><p><img src='" . $user['profileimg'] . "' alt=''><i><b> &nbsp;" . $user['firstname'] . " " . $user['lastname'] . "</b></i></p><br>
                    <p>" . $row['content'] . "</p><br></div><br><br>";
        }
    }
}

