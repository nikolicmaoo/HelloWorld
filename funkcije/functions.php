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
        set_message("Uspešno ste se registrovali, molimo Vas prijavite se!");
        redirect("login.php");
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
        if(email_exists($email)) {
            $errors[] = "Već postoji nalog sa tim email-om!";
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
        } else {
            $firstname = filter_var($firstname, htmlspecialchars($firstname));
            $lastname = filter_var($lastname, htmlspecialchars($lastname));
            $username = filter_var($username, htmlspecialchars($username));
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $password = filter_var($password, htmlspecialchars($password));
            create_user($firstname, $lastname, $username, $email, $password);
        }
    }
}

function clean($string) {
    return htmlentities($string);
}

function email_exists($email){
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $query = "SELECT id FROM users WHERE email = '$email'";
    $results = query($query);

    if($results->num_rows > 0){
        return true;
    } else {
        return false;
    }
    }

function user_exists($user) {
    $user = filter_var($user, FILTER_SANITIZE_EMAIL);
    $query = "SELECT id FROM users WHERE username = '$user'";
    $results = query($query);

    if ($results->num_rows > 0) {
        return true;
    } else{
        return false;
    }
}

function redirect($location){
    header("location:{$location}");
    exit();
}