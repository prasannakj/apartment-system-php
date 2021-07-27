<?php
include('lprocess.php');
$currUser= $_SESSION['login_user'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Profile</title>
    <style media="screen">
      body{
        background-color: #222f3e;
        color:white;
      }
      .container{
        margin-top: 150px;
        background-color: #1e272e;
        border: 3px solid black;
        border-radius: 10px;
        width: 600px;
        padding: 30px;
      }

    </style>
  </head>
  <body>
  <h2>Profile : </h2>
    <div class="container" >

    <?php

      if(isset($_SESSION['login_user']))
      printf( "<p > <u> <b> Welcome $currUser </b> </u> <p> <br> <br> Your Details : <br><br>");

      $sql ="SELECT * from register where user= '$currUser'";
      $ans = mysqli_fetch_array(mysqli_query($conn, $sql), MYSQLI_NUM);
       printf("E-mail :$ans[1] <br> Name :$ans[2] <br> Tele :$ans[4] <br> dob :$ans[5] <br> " );
    ?>

    <br>
    <form  action="message.php" method="post">
    <label class="text-info"> FeedBack :</label>
    <input class="form-control" type="text" name="msg" placeholder="Text goes here..." style="margin-bottom:15px;" >
    <button class="btn btn-success btn-sm" type="submit" name="send" style="margin-bottom:15px;">Submit</button>
  </form>

    <a href="/ip-lab/index.html"> <button type="submit" name="logout" class="btn btn-light btn-sm">Logout</button> </a>

  </div>


  </body>
</html>
