<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
  .myclass {
  font-size: 60px;
  font-family: cursive;
  width: auto;
  font-weight:bold;
  text-align: center;
  

}
img{
    
    border-radius:100%;
    width:150px;
    height:150px;
  
    float: right;

}
.desc{

    
    font-size: 22px;
  font-family: cursive;
    

}

.profile{
    float: right;
    font-weight:bold;
    font-size: 22px;
  font-family: cursive;
    

}
@media screen and (min-device-width: 694px) and (max-device-width: 900px){

  .myclass {
  font-size: 50px;
  font-family: cursive;
  width: auto;
  font-weight:bold;
  text-align: center;
  

}
.desc{
font-size: 22px;
font-family: cursive;
}
}


@media screen and (min-device-width: 400px) and (max-device-width: 693px){

.myclass {
font-size: 40px;
font-family: cursive;
width: auto;
font-weight:bold;
text-align: center;


}
.desc{

    
font-size: 20px;
font-family: cursive;


}
}
@media screen and (min-device-width: 290px) and (max-device-width: 399px){

.myclass {
font-size: 30px;
font-family: cursive;
width: auto;
font-weight:bold;
text-align: center;


}
.desc{

    
font-size: 17px;
font-family: cursive;


}
img{
    
    border-radius:100%;
    width:120px;
    height:120px;
  
    float: right;

}
.profile{
    float: right;
    font-weight:bold;
    font-size: 18px;
  font-family: cursive;
    

}
}
  </style>
  <body>
  <?php
  
  include "partials/_header.php";
?>

<center>
<div class=" jumbo-bg jumbotron jumbotron-fluid mb-0" id="home"style=" padding:130px 0px;background-image: url('partials/f8.jpg'); background-size: 100%; !important" >

</div>

      <div class="containr py-5 mt-0" style="background-color:#e6ffcc; ">
      <div class="container">
      
       <p class="myclass">Welcome To admin</p> 
      <p class="desc">This a quiz website. Online quizzes are a popular form of entertainment for web surfers. Online quizzes are generally free to play and for entertainment purposes only though some online quiz websites offer prizes. Websites feature online quizzes on many subjects.</p>  
      <img src="partials/dp1.jpeg" alt="" srcset="">
     
     </div>
      </div>
      <div class="containr py-5 mt-0" style="background-color:#e6ffcc;">
      <div class="container py-3">
      <br><br>
      <p class="profile">Developed by ~ Abhijit</p>
      
      
      </div>
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
