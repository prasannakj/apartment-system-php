<?php
  include('conn.php');
  session_start();
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $user = mysqli_real_escape_string($conn, $_POST['user']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);
  $photo = mysqli_real_escape_string($conn, $_POST['photo']);
  $tel = mysqli_real_escape_string($conn, $_POST['tel']);

  if($pass == $cpass){

    $sql = "INSERT INTO register (email, tel, photo, user, pass) VALUES ('$email','$tel','$photo', '$user', '$pass')";
    if(mysqli_query($conn, $sql)){
      $message = "Sucessfully Registered as '$user'";
      echo "<script type='text/javascript'>alert('$message');</script>";
      sleep(3);
    //  header("location: login.php");
    }
    else {
      echo "error";
    }
  }
  else {
    echo "passwords did'nt match";
  }
 ?>
