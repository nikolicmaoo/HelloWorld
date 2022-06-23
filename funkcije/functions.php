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
    $result = query($query);

    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();

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