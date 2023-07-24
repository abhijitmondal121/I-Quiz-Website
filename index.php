<?php
  include 'partials/dbconnect.php';
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>I-Quiz</title>
  </head>
  <style>
  #home{
    height:570px; padding:20px 0px; background-image: url('partials/q5.jpg');background-size: 100%; 
  }
#con{
  background-color:#e6ffcc;
  padding:30px 0px;
}
.myclass {
  font-size: 70px;
  font-family: cursive;
  text-shadow: 3px 3px red;
  width: auto;
  font-weight:bold;
  text-align: center;
  -webkit-animation: jump 1.5s ease 0s infinite normal;
  animation: jump 1.5s ease 0s infinite normal;
}
@keyframes jump {
  0% {
    transform: translateY(0);
  }
  20% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-30px);
  }
  50% {
    transform: translateY(0);
  }
  60% {
    transform: translateY(-15px);
  }
  80% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(0);
  }
}

@media screen and (min-device-width: 694px) and (max-device-width: 900px){
  #home{
    height:390px; padding:20px 0px; background-image: url('partials/q5.jpg');background-repeat: no-repeat;background-size: 100%; 
  }
  #con{
  background-color:#e6ffcc;
  padding:78px 0px;
}
.myclass {
  font-size: 60px;
  font-family: cursive;
  width: auto;
  font-weight:bold;
  text-align: center;
  -webkit-animation: jump 1.5s ease 0s infinite normal;
  animation: jump 1.5s ease 0s infinite normal;
}
@keyframes jump {
  0% {
    transform: translateY(0);
  }
  20% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-30px);
  }
  50% {
    transform: translateY(0);
  }
  60% {
    transform: translateY(-15px);
  }
  80% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(0);
  }
}

}



@media screen and (min-device-width: 294px) and (max-device-width: 693px){
  #home{
    height:235px; padding:20px 0px; background-image: url('partials/q5.jpg');background-size: 100%; 
  }
  #con{
  background-color:#e6ffcc;
  padding:50px 0px;
  font-weight:bold;
}
.myclass {
  font-size: 53px;
  /* font-family: cursive; */
  width: auto;
  
  font-weight:bold;
  text-align: center;
  -webkit-animation: jump 1.5s ease 0s infinite normal;
  animation: jump 1.5s ease 0s infinite normal;
}
@keyframes jump {
  0% {
    transform: translateY(0);
  }
  20% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-30px);
  }
  50% {
    transform: translateY(0);
  }
  60% {
    transform: translateY(-15px);
  }
  80% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(0);
  }
}

}
  </style>
  <body>
    
    


  <?php
  
    include "partials/_header.php";
  ?>
  <!--jumbotron-->
<div class=" jumbo-bg jumbotron jumbotron-fluid mb-0" id="home"style="" >


</div>

    
    <!--section  -->
  
      <center>
      <div class="containr " id="con" >
      <p class="myclass">Welcome To I-Quiz</p>   
      <p style="font-size:20px;  font-family: cursive;">please login and examine yourself</p>
      </div>
    </center>




    <?php include "partials/_footer.php";?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>