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
  .containe{
   
    background-color:#ebebe0;
  }
  .y{
    font-size:42px;
    text-shadow: 3px 3px white;
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
  .y{
    font-size:28px;
    text-shadow: 3px 3px white;
  }
}
  </style>
  <body>
  <?php  include "partials/_header.php";?>
  <div class=" jumbo-bg jumbotron jumbotron-fluid mb-0" id="home"style=" padding:80px 0px;background-image: url('partials/f8.jpg'); background-size: 100%; !important" >
  <div class="container mt-2 mb-0">
  <center>
<?php
 
 if(isset($_REQUEST['submit'])){
  $qid=$_REQUEST['Q'];
  $tid=$_REQUEST['T'];
  $qid=$qid-9;
       
           
  $sql="SELECT * FROM `topic` where `slno`= $tid";
  $result=mysqli_query($conn,$sql);
  while($rows=mysqli_fetch_array($result)){
  
  echo '<button type="button" class="btn btn-outline-light mb-3 " data-toggle="modal" data-target="#l"><h1 id="b">Result of '.$rows['t_name'].' quiz</h1></button>
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
          
          <div class="container my-1">
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
</div>
</div>

<div class="containe mt-0 py-4">
<center>
<h2 class="y my-4">All Correct Answers</h2>
</center>

<div class="container my-5 ">
<?php
        // $slno = $_GET['slno'];
       
           
            $sql="SELECT *FROM question where `tid`= '$tid' ";
            $result=mysqli_query($conn,$sql);
            while($rows=mysqli_fetch_array($result)){
             $aid=$rows['ansid'];   
            echo ' 
            
            <div class="container mt-3">
            <div class="card" style="border-radius:20px;">
                <h4 class="card-header" id="qb" style="font-size:18px;">'.$rows['question'].'</h4>';
            $sql1="SELECT *FROM answers where ansid=$aid ";
            $query=mysqli_query($conn,$sql1);
            while($rows=mysqli_fetch_array($query)){

                echo'<div class="card-body "id="ab" >Ans : 
                '.$rows['answers'].'';
                ?>


                <?php
                echo'

                </div>';
                
            }
            
        echo' </div>
        </div>';
    }  
    ?>
</div>
<center><h3 class="y">Thank you for visiting</h3></center>
                
</div>


    <?php include "partials/_footer.php";?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>