<?php
 include_once("./functions/infor.php");
session_start();
   if(isset($_SESSION["LoggedIn"])){
     unset($_SESSION["UserType"]);
     unset($_SESSION["LoggedIn"]);
     session_destroy();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>pumpprice</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" > 
    <link href="./css/landingpage.css" rel="stylesheet" type="text/css" media="screen">
     <link href="./css/landingsection.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="./icons/favicon.ico"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script src="https://kit.fontawesome.com/54be263888.js" crossorigin="anonymous"></script>
</head>
<body>
 <div class="container-fluid">  
        <div class="menue">
            <ul class="nav"> 
              <a class="logo" href="./index.php"><img src="./icons/pumprice-icon-3.png"> </a>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link " href="./market/pumpprice.php">Market</a>
                    </li> 
                      <a class="nav-link " href="./market/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./market/about.php">About</a>
                    </li>
                </li> 
                <li class="nav-item">
                      <a class="nav-link " href="./market/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./market/user_registration.php">Register</a>
                    </li> 
            </ul>   
  </div>
 
  <header id="landingpage">
      <div class="row">
      <h1 class="text-left-header">Register Filling Station</h1>
          <p class="text-left"> 
          Register your gas station for easy price display for customers.
          This can increase your sales to a great extent. Provide the required
          details in the form and wait for a comfirmation email.
          And know when there is change in price. to check for affordable Price
          in the market with other sellers.
          </p> 
     
      <div class="jumbotron"> 
      <input type="button" id="get-started" class="btn btn-primary btn-block" name="get-started" value="Get Started" >   
        </div> 
    </div> 
  </header>
   
 <?php include_once("./market/footer.php");?>
 
    </div>   
  <script>
    $(document).ready(function(){
      $("#get-started").on('click',function(){
        window.location="./market/register_gas_station.php";
      });
    });
  </script>
      <script src="./js/bootstrap.min.js"></script>
</body>
</html>