 <?php
session_start();
if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']=true){
        echo '
        <nav class="navbar navbar-expand-lg navbar-light "style="float:right;">
 
        <button class="navbar-toggler" type="button" data-toggle="collapse" style="background-color:white;"data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

        <div class="mx-1">
        <!-- Button trigger modal -->
        <div>
        <a href="index2.php" class="btn btn-outline-light mr-1"style="font-weight: bold;" >Dashbord</a>
        <button type="button" class="btn btn-light mr-1" data-toggle="modal" data-target="#l">welcome-'. $_SESSION['loginEmail'].'</button>
        <a href="logout.php" class="btn btn-outline-light mr-1" >logout</a>
     </div>
        </div>
        ';
      }
    else{
        echo'
        <nav class="navbar navbar-expand-lg navbar-light "style="float:right;">
 
        <button class="navbar-toggler" type="button" data-toggle="collapse" style="background-color:white;"data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link py-0" href="index.php"style="font-size:30px;color:white;font-weight:bold;font-family:italic;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link py-0" href="about.php"style="font-size:30px;color:white;font-weight:bold;font-family:italic;">About <span class="sr-only">(current)</span></a>
            </li>
            <div class="mx-1">
             <!-- Button trigger modal -->
        <div>
        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#loginModal">Login</button>
        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#SignupModal">Signup</button>
     </div> ';
    } 


?>



<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="handlelogin.php" method="POST">
      <div class="modal-body">
        
      <div class="mb-3">
            <label for="loginEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
        </div>
      </div>
      </form>
    </div>
  </div>



  <!-- signup -->

<!-- Modal -->
<div class="modal fade" id="SignupModal" tabindex="-1" role="dialog" aria-labelledby="SignupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SignupModalLabel">Signup Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="handlesignup.php" method="POST" >
      <div class="modal-body">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="signupEmail" name="signupEmail"  aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
          <label for="exampleInputCPassword1" class="form-label">ConfirmPassword</label>
          <input type="password" class="form-control" id="cpassword" name="cpassword" >
        </div>

        <button type="submit" class="btn btn-primary">Signup</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
      </form>
    </div>
  </div>
</div>


  <?php echo'
      </div>

 </div>
</nav>';



?>
  