<?php
  session_start();
  include('conn.php');
  if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $sql = "SELECT * FROM register where email = '$email' and  pass = '$pass'";
    $res=mysqli_fetch_array (mysqli_query($conn, $sql) );

    if($res['email']==$email && $res['pass']==$pass){
      $user=$res['user'];
      $_SESSION['login_user']=$user;
      header("location: profile.php");
    }
    else {
      $message = "Username and/or Password incorrect.\\nTry again.";
      echo "<script type='text/javascript'>alert('$message'); window.location.href='login.php'; </script>";
    }
  }
 ?>
