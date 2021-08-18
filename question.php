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
       #b{
       font-size:35px;

     }
     #q{
       font-size:25px;
     }
     #a{
       font-size:20px;
  }
  .w{
    display: flex;
    align-items: center;
    position: sticky;
    top: 0px;
    margin-left:5px;
    
  }
  #countdown{
    font-family: cursive;
    display: inline-flex;
    height: 60px;
    width: 250px;
    font-weight:bold;
    font-size: 35px;
    align-items: center;
    margin: 0;
   
    /* linear-gradient(135deg,#14ffe9,#ffeb3b,#ff00e0) */
    background: white;
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;
   animation: animate 1.5s linear infinite;
}

@keyframes animate {
    100%{
        filter: hue-rotate(360deg);
    }
}
   @media screen and (min-device-width: 664px) and (max-device-width: 1194px){

     #b{
       font-size:35px;

     }
     #q{
       font-size:22px;
     }
     #a{
       font-size:18px;
  }

   }

   @media screen and (min-device-width: 295px) and (max-device-width: 663px){

#b{
  font-size:22px;

}
#q{
       font-size:16px;
  }
  #a{
       font-size:14px;
  }

  #countdown{
    
    display: inline-flex;
    height: 50px;
    width: 150px;
    font-weight:bold;
    font-size: 20px;
    align-items: center;
    margin: 0;
   
    /* linear-gradient(135deg,#14ffe9,#ffeb3b,#ff00e0) */
    background: linear-gradient(135deg,#14ffe9,#ffeb3b,#ff00e0);
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;
   animation: animate 1.5s linear infinite;
}

@keyframes animate {
    100%{
        filter: hue-rotate(360deg);
    }
}
}
  </style>
  <body>
  
  <?php  include "partials/_header.php";?>
  
  <div class=" jumbo-bg jumbotron jumbotron-fluid mb-0" id="home"style=" padding:10px 0px; background-image: url('partials/f4.jpg');background-size: 100%; !important" >
  <div class="w mt-3"><p id="countdown"></p>   </div>
  <div class="container mt-0 mb-0">
  <center>
<?php
  $slno = $_GET['slno'];
       
           
  $sql="SELECT * FROM `topic` where `slno`= $slno ";
  $result=mysqli_query($conn,$sql);
  while($rows=mysqli_fetch_array($result)){
  
  echo '<button type="button" class="btn btn-warning " data-toggle="modal" data-target="#l"><h1 id="b"> Welcome to '.$rows['t_name'].' quiz</h1></button>
  ';
  }
?>
</center>
</div>
  


    <div class="container mb-0 ">
<form action="check.php" method="POST" >

    <?php
        // $slno = $_GET['slno'];
       
           
            $sql="SELECT *FROM question where `tid`= '$slno' ";
            $result=mysqli_query($conn,$sql);
            while($rows=mysqli_fetch_array($result)){
             $qid=$rows['qid'];   
            echo ' 
            
            <div class="container mt-3">
            <div class="card" style="border-radius:40px;">
                <h4 class="card-header" id="q">'.$rows['question'].'</h4>';
            $sql1="SELECT *FROM answers where qid=$qid ";
            $query=mysqli_query($conn,$sql1);
            while($rows=mysqli_fetch_array($query)){

                echo'<div class="card-body "id="a" >
                <input type="radio"  name="quizcheck['.$rows['qid'].']" value='.$rows['ansid'].' required>'.$rows['answers'].'';
                ?>

                <input type="hidden" name="Q" value="<?php echo $qid;?>" >
                <input type="hidden" name="T" value="<?php echo $slno;?>" >
                <?php
                echo'
                </div>';
                
            }
            
        echo' </div>
        </div>';
    }  
    ?>
    <div class="container my-0">
    <!-- <input type="submit" value="submit" name="submit" class="btn btn-success m-auto d-block my-2"> -->
    <center>
    <button type="submit" class="btn btn-warning px-5 py-2 mt-3 mb-0" name="submit" style="font-weight: bold;">Submit</button>
    </center>
    <?php
    //    echo '
    //  <a href="check.php?slno='.$slno.'&& qid='.$qid.'&& quizcheck=quizcheck['.$rows['qid'].']"><button type="button" class="btn btn-outline-primary mx-1 my-1" name="submit">Submit</button></a> 
    //  ';
     ?>






     </div>
    <br><br>
    </form>
    </div>
    </div>

   
    <?php include "partials/_footer.php";?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script>
 const sm=2.5;
let time=sm*60;
const countdown=document.getElementById('countdown');

setInterval(updatecount , 1000);

function updatecount(){
    const min=Math.floor(time/60);
    const mins=min<10 ? '0' +min :min;
    let seconds =time%60;
    
    seconds=seconds<10 ? '0' +seconds : seconds;
    

    countdown.innerHTML=`Time:${mins}:${seconds}`;
    time--;
    if(min== 00 && seconds==00){
        time=time+1;
        window.location.replace("http://localhost/all_quiz/index2.php");

    }
}
 </script>
 
  </body>
</html>