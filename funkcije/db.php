<?php

$con = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'helloworld');

function escape($string) {
    global $con;
    return mysqli_real_escape_string($con, $string);
}

function query($query) {
    global $con;
    return mysqli_query($con, $query);
}

function confim($results) {
    global $con;
    if (!$results){
        die("QUERY FAILED" . mysqli_error($con));
    }
}