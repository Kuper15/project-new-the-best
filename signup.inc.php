<?php

if (isset($_POST["submit"])) {#checking if any form requirements are filled

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup() !== false) {

    }#checking if any form requirements are filled
    
}
else {
    header("location: ../signup.php");
}