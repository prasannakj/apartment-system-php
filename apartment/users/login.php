
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

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
        width: 500px;
        padding: 30px;
      }
      .form-group input{
        border : 1px solid black;
        background-color: rgba(200, 214, 229,1);
      }
    </style>

    <script type="text/javascript">
        function ffocus() {
          console.log("invoked focus");
          $("#i1").css("background-color" , "lightyellow");
        }
        function bblur() {
          console.log("invoked blur");
          $("#i1").css("background-color" , "white");
        }
        function ffocus1() {
          console.log("invoked focus");
          $("#i2").css("background-color" , "lightyellow");
        }
        function bblur1() {
          console.log("invoked blur");
          $("#i2").css("background-color" , "white");
        }
        function mysub() {
          alert("are you sure!!");
        }
    </script>

  </head>
  <body>
    <div class="container">
      <form action="lprocess.php" method="post" onsubmit="mysub()">
        <h2 class= "text-success">Login</h2>
        <p > <input id="i1" onfocus="ffocus()" onblur="bblur()"   class="form-control" type="text" name="email" placeholder="E-mail" required> </p>
        <p> <input id="i2" onfocus="ffocus1()" onblur="bblur1()" class="form-control" type="password" name="pass" placeholder="Password" required> </p>
        <p> <button  class = "btn btn-success"type="submit" name="login">Log in</button> </p>
      </form>
    </div>
  </body>
</html>
