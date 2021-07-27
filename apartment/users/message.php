<?php
  session_start();
  include('conn.php');

  $user = mysqli_real_escape_string($conn, $_SESSION['login_user']);

  $msg = mysqli_real_escape_string($conn, $_POST['msg']);

  $q = "INSERT into message (user, msg) values ('$user', '$msg')";

  if(mysqli_query($conn, $q )){

  }
  else {
    echo "error!!!";
  }
  $q1 = 'SELECT * from message';

  $r1 = mysqli_query($conn,$q1);
  while($ans = mysqli_fetch_assoc($r1)){
      $u = $ans['user'];
      $m = $ans['msg'];
    echo "$u : $m <br>";

  }
  ?>
