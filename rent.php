<?php
session_start();

if(!isset($_SESSION['zalogowany']))
{
  header('Location: index.php');
  exit();
}
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
  <div id="header" class="header">
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
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 rent center-block">
            <?php
            echo "<h1>Witaj ".$_SESSION['user'].'!</h1>';
            ?>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 rent center-block">
              <?php
            echo '<h1 class="wyloguj"><a href="logout.php">Wyloguj się!</a></h1>';
            ?>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div id="first" class="packages center-block">
            </div>
            <br>
            <button class=" center-block btn btn-primary">RENT</button>
          </div>

          <div class="col-lg-3 col-md-6">
            <div id="second" class="packages center-block">
            </div>
            <br>
            <button class=" center-block btn btn-primary">RENT</button>
          </div>

          <div class="col-lg-3 col-md-6">
            <div id="third" class="packages center-block">
            </div>
            <br>
            <button class=" center-block btn btn-primary">RENT</button>
          </div>

          <div class="col-lg-3 col-md-6">
            <div id="fourth" class="packages center-block">
            </div>
            <br>
            <button class="center-block btn btn-primary">RENT</button>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div id="fifth" class="packages center-block">
            </div>
            <br>
            <button class=" center-block btn btn-primary">RENT</button>
          </div>

          <div class="col-lg-3 col-md-6">
            <div id="sixth" class="packages center-block">
            </div>
            <br>
            <button class=" center-block btn btn-primary">RENT</button>
          </div>

          <div class="col-lg-3 col-md-6">
            <div id="seventh" class="packages center-block">
            </div>
            <br>
            <button class=" center-block btn btn-primary">RENT</button>
          </div>

          <div class="col-lg-3 col-md-6">
            <div id="eight" class="packages center-block">
            </div>
            <br>
            <button class="center-block btn btn-primary">RENT</button>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div id="ninth" class="packages center-block">
            </div>
            <br>
            <button class=" center-block btn btn-primary">RENT</button>
          </div>

          <div class="col-lg-3 col-md-6">
            <div id="tenth" class="packages center-block">
            </div>
            <br>
            <button class=" center-block btn btn-primary">RENT</button>
          </div>

          <div class="col-lg-3 col-md-6">
            <div id="eleventh" class="packages center-block">
            </div>
            <br>
            <button class=" center-block btn btn-primary">RENT</button>
          </div>

          <div class="col-lg-3 col-md-6">
            <div id="twelfth" class="packages center-block">
            </div>
            <br>
            <button class="center-block btn btn-primary">RENT</button>
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
