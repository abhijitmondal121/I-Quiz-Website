<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'partials/dbconnect.php';
    $user_email=$_POST['loginEmail'];
    $password=$_POST['pass'];
    $sql="SELECT * FROM `users` WHERE `email`='$user_email'&&`password`='$password'";
    $result=mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows==1){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['loginEmail']=$user_email;
            //echo "login".$user_email;
            header("Location:/all_quiz/index2.php?loginsuccess=true");
        }
           else{

          header("Location:/all_quiz/index.php?loginsuccess=false");
           }
       
}
?>
<!-- id17095453_quiz
id17095453_abhijit -->
    
