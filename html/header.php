<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header.css" >
</head>
<body>
     <!-- header 1-->
     <header class="header1">
        <div class="container-h">
            <div class="navbar">
                <div class="logo">
                    <a href="home.php"><img src="../images/logo 4.png" width="55px" alt="Logo Not Found" /></a>
                </div>

                <nav> 
                    <ul>
                        <li><a href="#"><input type="text" class="search" placeholder="Search Products..." /></a></li>
                        <li><a href="#"><img src="../images/icon/search.png" width="35px" ></a></li>
                        <li><a href=""><img src="../images/icon/cart.png" width="35px" ></a></li>

                        <?php
                                if (isset($_SESSION["username"])) {
                                    echo '<li><a id="RegisterdUser" href="#">Hello '. $_SESSION["username"] . ' !  <img src="../images/icon/login.png" width="35px" /></a></li>';
                                    echo '<li><a id="RegisterdUser" href="../includes/logout.php">Logout</a></li>';
                                } else {
                                  echo '<li><a id="User" href="Loginpage.php">Hello User !<img src="../images/icon/login.png" width="35px" /></a></li>';
                                }
                         ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<!-- header 1-->
</body>
</html>