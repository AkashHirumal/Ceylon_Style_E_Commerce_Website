<?php
    $serverName="localhost";
    $dbUserName="akash";
    $dbPassword="pJOCPv]g1MFRTCFo";
    $dbName="ceylonstyle_login";

    $conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

    if(!$conn){
        die("Connection failed : " .mysqli_connect_error());
    }
    

?>