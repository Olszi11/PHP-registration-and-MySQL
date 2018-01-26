<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"]) || empty($_POST["surname"]) || empty($_POST["e-mail"]) || empty($_POST["phone"]) || empty($_POST["age"]) || empty($_POST["message"])) {
    echo "<span class=\"formDataHeader\">Fields cannot be empty!</span>";
  } else {
    validate();
  }
} else {
  echo "<span class=\"formDataHeader\">Something goes wrong!</span>";
}


function showFormData(){

  foreach($_POST as $key => $value)
  {
    $key=ucfirst($key);
    echo "<div class=\"formDataInfo\">
    <div><span class=\"colorNormal formDataInfo-bold\">$key</span>:&emsp;$value</div>
    </div>";
  }
}





function validate() {

  $name= $_POST["name"];
  $surname = $_POST["surname"];
  $email = $_POST["e-mail"];
  $phone = $_POST["phone"];
  $age = $_POST["age"];
  $message = $_POST["message"];


  $wszystko_OK = true;

  /*name*/
  if( (strlen($name)<3) || (strlen($name)>20) )
  {
    $wszystko_OK = false;
    $_SESSION['name_error']='<span class="err"> Name must have 3 - 20 signs!</span>';
    echo $_SESSION['name_error'];
  }
  if(!preg_match("/^[a-zA-Z]*$/",$name))
  {
    $wszystko_OK = false;
    $_SESSION['name_error']= '<span class="err"> Name must contain only letters (without white spaces)!</span>';
    echo $_SESSION['name_error'];
  }
  if(ctype_alnum($name)==false)
  {
    $wszystko_OK = false;
    $_SESSION['name_error']='<span class="err"> Name should consist of only letters of numbers (without Polish characters and white spaces)!</span>';
    echo $_SESSION['name_error'];
  }

  /*surname*/
  if( (strlen($surname)<3) || (strlen($surname)>20) )
  {
    $wszystko_OK = false;
    $_SESSION['surname_error']='<span class="err"> Surname must have 3 - 20 signs!</span>';
    echo $_SESSION['surname_error'];
  }
  if(!preg_match("/^[a-zA-Z]*$/",$surname)){
    $wszystko_OK = false;
    $_SESSION['surname_error']='<span class="err"> Surname must contain only letters (without white spaces)!</span>';
    echo $_SESSION['surname_error'];
  }
  if(ctype_alnum($surname)==false)
  {
    $wszystko_OK = false;
    $_SESSION['surname_error']='<span class="err"> Surname should consist of only letters of numbers (without Polish characters and white spaces)!</span>';
    echo $_SESSION['surname_error'];
  }


  /*email*/
  $emailB = filter_var($email,FILTER_SANITIZE_EMAIL);
  if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false)||($emailB!=$email))
  {
    $wszystko_OK = false;
    $_SESSION['email_error'] ='<span class="err"> Wrong email adress!</span>';
    echo $_SESSION['email_error'];
  }

  /*phone*/
  if(!preg_match("/^[0-9]{9,13}$/", $phone))
  {
    $wszystko_OK = false;
    $_SESSION['phone_error']= '<span class="err"> Please enter valid phone number!</span>';
    echo $_SESSION['phone_error'];
  }
  /*age*/
  if((intval($age))<18)
  {
    $wszystko_OK = false;
    $_SESSION['age_error']='<span class="err"> You must be adult!</span>';
    echo $_SESSION['age_error'];
  }
  if(!preg_match("/^[0-9]*$/", $age))
  {
    $wszystko_OK = false;
    $_SESSION['age_error']='<span class="err"> Please eneter valid age!</span>';
    echo $_SESSION['age_error'];
  }


  /*message*/
  if( (strlen($message)<5))
  {
    $wszystko_OK = false;
    $_SESSION['message_error']='<span class="err"> Your message must have more than 5 signs!</span>';
    echo $_SESSION['message_error'];
  }



  /*ok*/
  else if($wszystko_OK ==true)
  {
    echo "<span class=\"colorNormal\">Thanks for your message! Your information:</span>"."<br/>";
    showFormData();
  }



}

?>
