<?php
    function emptyInputSignup($username, $email, $pwd, $rpwd){
        $result;
        if(empty($username) || empty($email) || empty($pwd) || empty($rpwd)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function invalidUid($username){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function pwdMatch($pws , $rpwd){
        $result;
        if($pws !== $rpwd){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function uidExists($conn, $username, $email){
        $sql = "SELECT * FROM userlogin WHERE 	userName = ? OR userEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../html/Loginpage.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            return false;
        }

       

    }

    function createUser($conn, $username,$email,$pwd){
        $sql  = "INSERT INTO userlogin( userName, userEmail,	userPassword) VALUES (?,?,?) ;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:../html/LoginpPage.php?error=stmtfailed");
            exit();
        }

        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location:../html/LoginPage.php?error=none");
        exit();
    }


/////////////////////////// login

    function emptyInputLogin($username, $pwd){
        $result;
        if(empty($username) || empty($pwd)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function loginUser($conn, $username, $pwd){
        $uidExists = uidExists($conn, $username, $username);
        if($uidExists === false){
            header("Location: ../html/LoginPage.php?error=wronglogin");
            exit();
        }
    
        $pwdHashed = $uidExists["userPassword"];
        $checkpwd = password_verify($pwd, $pwdHashed);
    
        if($checkpwd === false){
            header('Location: ../html/LoginPage.php?error=wronglogin');
            exit();
        }
        
        else if($checkpwd === true){
            session_start();
            $_SESSION["userid"] = $uidExists["userID"];
            $_SESSION["username"] = $uidExists["userName"];
            
            if(	$uidExists['role']=="admin"){
                header('Location:../html/adminItem.php');  
            }
            else{
                header("Location: ../html/home.php");
            }
            exit();
        }
    }
    
        
?>