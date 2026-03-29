<?php
    session_start();
    if (!isset($_SESSION["adminloginid"])){
      header("Location: ../Admin/admin_login.php");
      exit();
    } 
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="sidebarstyle.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

  <style>
    .box{
        height: auto;
        width: 500px;
        padding: 20px;
        border: 2px solid black;
        margin-top: 30px;
    }
</style>
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container--main">
    <div class="sidebar">
      <ul>
        <li><a href="#" class="logo">
          <img src="icon.jpg" alt="">
          <span class="nav--item">DashBoard</span>
        </a></li>
        <li><a href="admin.php">
          <i class="fas fa-home"></i>
          <span class="nav--item">Home</span>
        </a></li>
        <li><a href="cat1.php">
          <i class="fas fa-tasks"></i>
          <span class="nav--item">Tables</span>
        </a></li>
        <li><a href="../Admin/logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav--item">Log out</span>
        </a></li>
      </ul>
    </div>

<section class="main">
  <div class="text-center display-6 my-2">
    Welcome <?php echo htmlspecialchars($_SESSION['adminloginid']);?> 
  </div>
    <div class="main-top">
      <h2>Admin Panel</h2>
    </div>
    <div class="main-skills">
      <div class="card--main">
        <i class="fa-solid fa-users"></i>
        <h3>Users</h3>
        <p>
          <?php
          include('../files/config/dbconnect.php');
          $sql="select * from tbl_user";
          $count=mysqli_num_rows(mysqli_query($conn,$sql));
          echo $count;
          ?>
        </p>
        <a class="btn" href="user.php">Show More...</a>
      </div>
      <div class="card--main">
        <i class="fa-solid fa-list-check"></i>
        <h3>Tables</h3>
        <p>
        <?php

          $sql="select * from tbl_cat";
          $count=mysqli_num_rows(mysqli_query($conn,$sql));
          echo $count;
          ?>
        </p>
        <a class="btn" href="cat1.php">Show More...</a>

      </div>
      <div class="card--main">
        <i class="fa-solid fa-list-check"></i>
        <h3>Bookings</h3>
        <p>
        <?php

          $sql="select * from tbl_table";
          $count=mysqli_num_rows(mysqli_query($conn,$sql));
          echo $count;
          ?>
        </p>
        <a class="btn" href="table.php">Show More...</a>

      </div>
      
    </div>
<br>
  </body>
</html>
    