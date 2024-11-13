<?php
    if(isset($_POST["submit"])){
        $username = $_POST["uid"];
        $email = $_POST["uemail"];
        $pwd = $_POST["pwd"];
        $rpwd = $_POST["rpwd"];


        require_once 'dbh.inc.php'; 
        require_once 'functions.inc.php';
        
        $emptyInput = emptyInputSignup($username, $email, $pwd, $rpwd);
        $invalidUid = invalidUid($username);
        $invalidEmail = invalidEmail($email);           // check valid email
        $pwdMatch = pwdMatch($pwd, $rpwd);
        $uidExists = uidExists($conn, $username, $email);

        if($emptyInput !==false){
            
            header("Location: ../html/LoginPage.php?error=emptyinput");
            
            exit();
        }

        if($invalidUid !==false){
            header("Location: ../html/LoginPage.php?error=invaliduid");
            exit();
        }

        if($invalidEmail !==false){
            header("Location: ../html/LoginPage.php?error=invalidemail");
            exit();
        }

        if($pwdMatch !==false){
            header("Location: ../html/LoginPage.php?error=passwordNotMaching");
            exit();
        }

        if($uidExists !==false){
            header("Location: ../html/LoginPage.php?error=uidalreadyExcist");
            exit();
        }

        createUser($conn, $username,$email,$pwd);
    }
    else{
        header('Location: ../html/LoginPage.php');
    }
?>