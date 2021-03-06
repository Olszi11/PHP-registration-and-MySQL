<?php session_start();
if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
{
  header('Location: rent.php');
  exit();
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Costume rental registration</title>
  <script src="js/jquery.min.js"></script>
  <script src="js/app.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
</head>

<body>
  <!--HEADER-->
  <div id="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12-lg">
          <h1 class="text-center"> Costume rental office</h1>
        </div>
      </div>
    </div>
  </div>
  <!--END HEADER-->

  <!--main page-->
  <div id="container">
    <div class="container">
      <div clas="content-container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center">Please login or <a style="text-decoration: underline;color:red;"href="rejestracja.php">register!</a></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 login">
            <label class="center-block text-center"> LOG IN</label>
              <form class="text-center" action="zaloguj.php" method="post">
              <h4>Login:</h4><br/><input type="text" name="login"/><br/>
              <h4>Password:</h4><br/><input type="password" name="haslo"/><br/><br/>
              <?php
              if(isset($_SESSION['blad']))
              {
                echo $_SESSION['blad'];
              }
             ?>
             <br/>
              <input type="submit" value="Log in"/>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="text-center center-block">Copyright 2017 &copy; </h1>
          </div>
        </div>
      </div>
    </div>


        <script src="js/bootstrap.min.js"></script>
</body>
</html>
