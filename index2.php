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
    padding:280px 0px; background-image: url('partials/f3.jpg');background-size: 100%; !important
  }
  .c{
    background-color:#ebebe0;
    padding:30px;

  }
  .y{
    font-size:42px;
    text-shadow: 3px 3px white;
  }
  @media screen and (min-device-width: 494px) and (max-device-width: 770px){

    #home{
    padding:170px 0px; background-image: url('partials/f3.jpg');background-repeat: no-repeat;background-size: 100%; !important
  }
  .c{
    background-color:#ebebe0;
    padding:40px;

  }
  .y{
    font-size:38px;
  }
  }
  @media screen and (min-device-width: 294px) and (max-device-width: 493px){

#home{
padding:110px 0px; background-image: url('partials/f3.jpg');background-repeat: no-repeat;background-size: 100%; !important
}
.c{
background-color:#ebebe0;
padding:40px;

}
.y{
font-size:28px;
}
}
  </style>
  <body> 
    
  <?php
  
    include "partials/_header.php";
  ?>
  <!--jumbotron-->
<div class=" jumbo-bg jumbotron jumbotron-fluid mb-0" id="home"style=" " >


</div>
<div class="c "style="">
    
    <!--section  -->
      <center>
      <div class="container my-2 px-2" >
      <h2 class="y my-4">Please select your Language</h2>
        
          <div class="row my-5">
                <?php
              $sql="SELECT * FROM `topic` ";
              $result= mysqli_query($conn,$sql);
              while($row = mysqli_fetch_assoc($result)){
              $slno=$row['slno'];
              $t_name=$row['t_name'];
              $des=$row['des'];

            // echo '
            // <a href="question.php?slno='.$slno.'"><button type="button" class="btn btn-outline-primary mx-1 my-1" style="width: 350px; height: 110px;box-shadow: 2px 2PX 2PX 2PX rgb(104, 102, 102);">'.$t_name.'</button></a> 
            // ';
                
                
                
            echo '  <div class="col-md-4 mt-3 mb-2">
            <div class="card" style="width: 16rem;border-radius: 10%;box-shadow: 2px 2PX 15PX 15PX rgb(104, 102, 102);">
            <img  src="https://source.unsplash.com/500x400/?'. $t_name.',coding" class="card-img-top" alt="..." style=" border-radius: 15%;">
            <div class="card-body ">
              <h5 class="card-title"><a href="question.php?slno='.$slno.'">'. $t_name.'</a></h5>
              <p class="card-text px-1" style="background-color:rgb(240, 240, 240);border-radius: 20px;">'.substr($des,0,70).'.......</p>
              <a href="question.php?slno='.$slno.'" class="btn btn-primary">View Quiz</a>
              </div>
            </div>
            </div>
          ';
            }
          ?>
      </div>
    </div>
     
    </center>
    </div>
    
  <?php include "partials/_footer.php";?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
