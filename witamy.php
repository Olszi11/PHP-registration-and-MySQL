<?php session_start();
if(!isset($_SESSION['udanarejestracja']))
{
  header('Location: index.php');
  exit();
}
else{
  unset($_SESSION['udanarejestracja']);
}

//usuwanie zmiennych sesyjnych w razie nieuadanej walidacji
if(isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
if(isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
if(isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
if(isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
if(isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);

//usuwanie bledow rejestracji
if(isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
if(isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
if(isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
if(isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
if(isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);

 ?>

<!DOCTYPE HTML>
<html lang="pl">
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

  <div id="container">
    <div class="container">
      <div clas="content-container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center">Thanks for your registratrion.  Please <a style="text-decoration:underline;" href="index.php">LOGIN</a> to your account.</h3>
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



</body>
</html>
