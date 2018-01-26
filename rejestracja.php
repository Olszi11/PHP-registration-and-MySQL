<?php
session_start();
if(isset($_POST['email']))
{
  //udana walicadcja? Założmy że tak!
  $wszystko_OK = true;

  //sprawdzenie Nickname

  $nick= $_POST['nick'];

  //sprawdzenie dlugosci Nickname
  if( (strlen($nick)<3) || (strlen($nick>20)) )
  {
    $wszystko_OK = false;
    $_SESSION['e_nick']="Nick must have 3 - 20 signs";
  }

  if(ctype_alnum($nick)==false)
  {
    $wszystko_OK = false;
    $_SESSION['e_nick']="Nick should consist of only letters of numbers (without Polish characters)";
  }

  //sprawdzanie poprawnosci adresu emaila
  $email = $_POST['email'];
  $emailB = filter_var($email,FILTER_SANITIZE_EMAIL);

  if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false)||($emailB!=$email))
  {
    $wszystko_OK = false;
    $_SESSION['e_email'] ="Wrong email adress!";
  }

  //sprawdzanie poprawnosci hasla

  $haslo1 = $_POST['haslo1'];
  $haslo2 = $_POST['haslo2'];

  if((strlen($haslo1)<8) || (strlen($haslo1)>20))
  {
    $wszystko_OK = false;
    $_SESSION['e_haslo']="Password must have 3 - 20 signs";
  }

  if($haslo1!=$haslo2)
  {
    $wszystko_OK = false;
    $_SESSION['e_haslo']="The passwords are not identical";
  }

  $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

  //czy zaakceptowan regulamin
  if(!isset($_POST['regulamin']))
  {
    $wszystko_OK = false;
    $_SESSION['e_regulamin']="Accept regulations!";
  }

  //bot or apache_note

  $sekret = "6LeHPjwUAAAAAGihd3ZgR3BxgTFd8JG6ecJTsNTJ";

  $sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);

  $odpowiedz = json_decode($sprawdz);

  if($odpowiedz->success == false)
  {

      $wszystko_OK = false;
      $_SESSION['e_bot']="Confirm that you are not a bot!";

  }

  //zapamietaj wprwadzone DomainException
  $_SESSION['fr_nick']= $nick;
  $_SESSION['fr_email']= $email;
  $_SESSION['fr_haslo1']= $haslo1;
  $_SESSION['fr_haslo2']= $haslo2;
  if (isset($_POST['regulamin']))
  {
    $_SESSION['fr_regulamin'] = true;
  }


  require_once "connect.php";
  mysqli_report(MYSQLI_REPORT_STRICT);

  try {
    	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
      if ($polaczenie->connect_errno!=0)
    	{
    		throw new Exception(mysqli_connect_errno());
    	}
      else {

        // Czy email juz istnieje?
        $rezultat = $polaczenie ->query("SELECT id FROM uzytkownicy WHERE email='$email'");

        if(!$rezultat) throw new Exception($polaczenie->error);

        $ile_maili = $rezultat->num_rows;
        if($ile_maili>0)
        {
            $wszystko_OK = false;
            $_SESSION['e_email']="Account registered with this e-mail already exists in the database!";
        }


        // Czy mick juz istnieje?
        $rezultat = $polaczenie ->query("SELECT id FROM uzytkownicy WHERE user='$nick'");

        if(!$rezultat) throw new Exception($polaczenie->error);

        $ile_nickow = $rezultat->num_rows;
        if($ile_nickow>0)
        {
            $wszystko_OK = false;
            $_SESSION['e_nick']="This nick already exists! Choose another one.";
        }


        if($wszystko_OK ==true)
        {
          //Hurra, wszystki testy zaliczone dodajemy gracza do bazy
          if($polaczenie->query("INSERT INTO uzytkownicy VALUES(NULL,'$nick','$haslo_hash','$email')"))
          {
            $_SESSION['udanarejestracja']=true;
            header('Location: witamy.php');
          }
          else {
            throw new Exception($polaczenie->error);
          }

        }


        $polaczenie->close();
      }


  } catch (Exception $e) {

    echo '<span style="color:red;">Server error! Sorry for inconvenience and please register in another time.</span>';
    //echo '<br /> Dev info: '.$e;
  }
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
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <style>
  .error
  {
    color:red;
    margin-top: 10px;
    margin-bottom: 10px;
    font-weight: bold;
    font-size: 12px;
  }
  </style>
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

  <div id="container">
    <div class="container">
      <div clas="content-container">
        <div class="row">
          <div class="col-lg-12 registration">
            <label class="center-block text-center" > REGISTRATION</label>
            <form class="text-center" method="post">
              <h4>Nickname:</h4> <br /> <input type="text" value="<?php
              if (isset($_SESSION['fr_nick']))
              {
                echo $_SESSION['fr_nick'];
                unset($_SESSION['fr_nick']);
              }
              ?>" name="nick" /><br />

              <?php
              if (isset($_SESSION['e_nick']))
              {
                echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
                unset($_SESSION['e_nick']);
              }
              ?>


              <h4>E-mail:</h4> <br /> <input type="text" value="<?php
              if (isset($_SESSION['fr_email']))
              {
                echo $_SESSION['fr_email'];
                unset($_SESSION['fr_email']);
              }
              ?>" name="email" /><br />

              <?php
                if (isset($_SESSION['e_email']))
                {
                  echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                  unset($_SESSION['e_email']);
                }
              ?>

              <h4>Password:</h4> <br /> <input type="password"  value="<?php
                  if (isset($_SESSION['fr_haslo1']))
                  {
                    echo $_SESSION['fr_haslo1'];
                    unset($_SESSION['fr_haslo1']);
                  }
                ?>" name="haslo1" /><br />

              <?php
                if (isset($_SESSION['e_haslo']))
                {
                  echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                  unset($_SESSION['e_haslo']);
                }
              ?>

            <h4>Repeat password:</h4> <br /> <input type="password" value="<?php
              if (isset($_SESSION['fr_haslo2']))
              {
                echo $_SESSION['fr_haslo2'];
                unset($_SESSION['fr_haslo2']);
              }
            ?>" name="haslo2" /><br />


            <div class="checkbox">
              <input type="checkbox" name="regulamin" <?php

              if(isset($_SESSION['fr_regulamin']))
              {
                echo "checked";
                unset($_SESSION['fr_regulamin']);
              }
            ?>/>
            <label> Accept regulations </label>
            </div>


            <?php
              if(isset($_SESSION['e_regulamin']))
              {
                echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
                unset($_SESSION['e_regulamin']);
              }
            ?>


            <div class="g-recaptcha" data-sitekey="6LeHPjwUAAAAANUGnrk7-iH_vyKRb7Hh6hARRaan"></div>

            <?php
              if(isset($_SESSION['e_bot']))
              {
                echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
                unset($_SESSION['e_bot']);
              }
             ?>
             <br />
             <input type="submit" value="Register now"/>
             <a href="index.php"> or LOG IN!</a>
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

</body>
</html>
