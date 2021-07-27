<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="reg.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <style media="screen">
      body{
        background-color: #222f3e;
        color:white;
      }
      .container{
        margin-top: 20px;
        background-color: #1e272e;
        border: 3px solid black;
        border-radius: 10px;
        width: 500px;
        padding: 30px;
      }
      .form-group input{
        border : 1px solid black;

      }
    </style>

<script>

$(function(){

  var today = new Date() ;
  var x = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
    $("#d").val(x);

     $('#btn').click(function(){
         var date = new Date($("#dob").val());
         var today = new Date();
         var timeDiff = Math.abs(today.getTime() - date.getTime());
         var age1 = Math.floor((timeDiff / (1000 * 3600 * 24)) / 365);
          $("#a").val(age1);
    });

    $('#btn1').click(function(){
      var a1 = $('#a').val();
      var a2 = $('#a1').val();
      if(a1 == a2){
        $('#demo').html("its match!!");
      }
      else {
        $('#demo').html("not match!!");
      }
    });


  });

</script>

  </head>
  <body>
    <div class="container">

    <form action="rprocess.php" method="post">
      <div class="form-group">

      <h2 class= "text-success" >Registration Form</h2>

      <p> <input class="form-control" type="email" name="email" placeholder="E-mail" pattern="[a-zA-Z0-9]{1,}@" required>   </p>

      <p> <input class="form-control" type="tel" name="tel" placeholder="Telephone" required> </p>

      <div class="custom-file mb-3">
        <input type="file" class="custom-file-input" id="customFile" name="photo">
        <label class="custom-file-label" for="customFile">Choose Profile Picture</label>
      </div>
      <p> <input class="form-control" type="text" name="user" placeholder="Username" required>   </p>

      <p> <input class="form-control" type="password" name="pass" placeholder="Password" pattern="[a-zA-Z]{6}[0-9]{1}[!@#$%^&*]{2}" required>  </p>

      <p> <input class="form-control" type="password" name="cpass" placeholder="Conform Password" required>  </p>
      <hr>
      <p>Todays Date :  <input id="d" type="date" > </p>

      <p> DOB : <input id="dob" type="date" name="dob" placeholder="DOB"> </p>

      <p>auto Age : <input disabled id="a" type="number" name="age" min="25" max="40" placeholder="Age">
      <button id="btn" type="button" name="button" >Calc. age</button> </p>

      <p>manual Age : <input id="a1" type="number" name="age" min="25" max="40" placeholder="Age">
      <button id="btn1" type="button" name="button" >Check</button> </p>
      <p id = "demo"></p>

      <hr>

      <p> <button class = "btn btn-success" type="submit" name="sign">Sign up</button> </p>

    </div>
    </form>
    </div>
  </body>
</html>
