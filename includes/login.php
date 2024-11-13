<?php
    if(isset($_POST["submit"])){
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputLogin($username, $pwd)!==false){
            header("Location: ../html/LoginPage.php?error=emptyinput");
            exit();
        }

        loginUser($conn, $username, $pwd);

    }
    else{
        header('location: ../html/LoginPage.php');
    }
?>