<?php
include ('lprocess.php');
echo "logging out";

    unset($_SESSION['login_user']);
    header("location: main.html");

  ?>
<link rel="stylesheet" href="style.css">
