<?php  include 'partials/dbconnect.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>I-Quiz!</title>
  </head>
  <style>
       #b{
       font-size:40px;

     }
     #q{
       font-size:33px;
     }
     #a{
       font-size:28px;
  }
   @media screen and (min-device-width: 664px) and (max-device-width: 1194px){

     #b{
       font-size:35px;

     }
     #q{
       font-size:27px;
     }
     #a{
       font-size:25px;
  }

   }

   @media screen and (min-device-width: 295px) and (max-device-width: 663px){

#b{
  font-size:23px;

}
#q{
       font-size:24px;
  }
  #a{
       font-size:17px;
  }
}
  </style>
  <body>
  <?php  include "partials/_header.php";?>
  <div class=" jumbo-bg jumbotron jumbotron-fluid" id="home"style=" padding:150px 0px;background-image: url('partials/f8.jpg'); background-size: 100%; !important" >

  <div class="container mt-5">
  <center>
<?php
 
 if(isset($_REQUEST['submit'])){
  $qid=$_REQUEST['Q'];
  $tid=$_REQUEST['T'];
  $qid=$qid-9;
       
           
  $sql="SELECT * FROM `topic` where `slno`= $tid";
  $result=mysqli_query($conn,$sql);
  while($rows=mysqli_fetch_array($result)){
  
  echo '<button type="button" class="btn btn-outline-light " data-toggle="modal" data-target="#l"><h1 id="b">Result of '.$rows['t_name'].' quiz</h1></button>
  ';
  }
?>
</center>
</div>
  



  <?php
    
    // echo 'Tid is'.$tid;
    // echo 'qid is'.$qid;
      
      $result=0;
      if(!empty($_REQUEST['quizcheck'])){
          $count= count($_REQUEST['quizcheck']);
          echo '
          
          <div class="container my-5">
       <div class="card" >
       
       </div>
       <div class="card my-2">
       <h4 class="card-header" id="q">Question attemped: '.$count.'</span></h4>
        </div>
            ';
           
          $selected=$_REQUEST['quizcheck'];
        
          $sql="SELECT *FROM question where  `tid`= $tid";
          $query=mysqli_query($conn,$sql);
          while($rows=mysqli_fetch_array($query)){        
            
            $check=$rows['ansid']==$selected[$qid];
              
              if($check){
                      $result++;
                }
                $qid++;

              
          }
          echo '<div class="card" >
          <h4 class="card-header" id="q">Your Total Score:<span style=""> '.$result.'</h4>
         
           </div>
           <div class="card mt-2">
       
          <h4 class="card-header" id="a">Please click dashbord for other language</h4>
           </div>
           </div>';
           echo mysqli_error($conn);


      }
  }


 ?>
    <?php include "partials/_footer2.php";?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>