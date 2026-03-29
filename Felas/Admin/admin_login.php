<?php 
  include_once "../files/config/dbconnect.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="text/css" href="style.css"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  /* div.login-form{
    position: absolute;
    top: 50% ;
    left: 50% ;
    transform: translate(-50%,-50%) ;
    width: 400px;
  } */
</style>
</head>
<body>
<!-- <div> 
 <div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <form method="post" action="">
      <h4 class="bg-dark text-white py-3">ADMIN LOGIN</h4>
      <div class="p-4">
      <div class="mb-3">
        <input  name="admin_name" type="text" class="form-control shadow-none" placeholder="Admin Name">
      </div>
      <div class="mb-4">
        <input name="admin_pass" type="password" class="form-control shadow-none" placeholder="Password">
      </div>
      <button name="login" type="submit" class="btn bg-dark text-white shadow-none">LOGIN</button>
    </div>
  </div>
  </form>
</div> -->

<section class="vh-100">
  <div class="container py-5 h-100">
   
    <div class="row d-flex align-items-center justify-content-center h-100">
    <center><h2>LOGIN</h2></center>
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="../images/login.jpg"
          class="img-fluid">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="POST">
          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form1Example13">Name</label>
            <input type="text" name="admin_name" id="form1Example13" class="form-control form-control-lg" />
         
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="form1Example23">Password</label>
            <input type="password" name="admin_pass" id="form1Example23" class="form-control form-control-lg" />
          </div>
<!-- 
          <div class="d-flex justify-content-around align-items-center mb-4"> -->
            <!-- Checkbox -->
            <!-- <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div> -->

          <!-- Submit button -->
          <button type="submit" name="login" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Sign in</button>

          <!-- <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div> -->
<!-- 
          <a data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
            role="button">
            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
          </a>
          <a data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
            role="button">
            <i class="fab fa-twitter me-2"></i>Continue with Twitter</a> -->

        </form>
      </div>
    </div>
  </div>
</section>


<?php

if(isset($_POST["login"]))
{
  $query="select * from admin_login where Admin_name='$_POST[admin_name]' and Admin_password='$_POST[admin_pass]'";
  $result=mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1)
  {
  session_start();
  $_SESSION["adminloginid"] =$_POST['admin_name'];
  header('Location: ../Admin/admin.php');
  exit();

  }
    else{
      echo "<script>alert('Incorrect Password')</script>";
    }
}
?>
</body>
</html>
