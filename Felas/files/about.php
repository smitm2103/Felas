<?php
include_once("../files/config/dbconnect.php");
session_start();
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700;400&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<style>
    *{
        .poppins-regular {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
          }

          .poppins-medium {
          font-family: "Poppins", sans-serif;
          font-weight: 500;
          font-style: normal;
          }

          .poppins-semibold {
          font-family: "Poppins", sans-serif;
          font-weight: 600;
          font-style: normal;
          }

    }
    .h-font{
        // <uniquifier>: Use a unique and descriptive class name

            .merienda-<uniquifier> {
            font-family: "Merienda", cursive;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
            }
    }
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.carousel-item{
    height: 540px;
} 
.carousel-item img{
    height: 540px;
}
.heading{
  text-align: center;
}
.row{
  
}
.full-cover  {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
.box{
    border-top-color: var(--teal) !important ;
}
.card {
            text-align: center;
        }
        .icon {
            font-size: 2em;
            margin-bottom: 10px;
        }

</style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Felass</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.php">Tables</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
        </ul>
      <form method="POST">
        <div class="d-flex"> 
            <span><h5 class="text-center me-3 mt-2" style="text-transform : uppercase"><?php echo htmlspecialchars($_SESSION['username']);?></h5></span>
          <button name="logout" type="submit" class="btn btn-outline-dark text-bold-dark font-weight-bold font-size-250px  shadow-none me-md-lg-3 m3-3 ">LOG OUT</button>
          </form>
        </div>

        <?php
      if(isset($_POST['logout'])) 
      {
          session_destroy();
          header('location: userlogin.php');
      }
      ?>
      </div>
      </nav>
     


      <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center text-decoration-underline">Our Story</h2>
        <p class="text-center font-monospace fs-4">Welcome to Felass, the ultimate snooker game zone where passion meets precision and fun meets competition. Our story began with a dream to create a unique entertainment experience that would bring people together and ignite their love for the game.</p>
      </div>
      
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-6">
            <h3 class="mb-3 h-2 text-decoration-underline">Our Mission</h3>
            <p class="fs-5">
              At Felass, we're dedicated to providing a world-class snooker experience that's unmatched in excitement and entertainment. Our mission is to create an atmosphere that's electric, inclusive, and fun for players of all levels.
            </p>
          </div>
          <div class="col-lg-5 mb-4">
            <img src="../images/images.jpeg" class="w-100">
          </div>
        </div>
      </div>
      
      <br>
      
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-3 me-4">
            <div class="card">
              <div class="card-body bg-white rounded shadow p-4 text-center border-top border-4 box">
                <div class="icon ">
                  <img src="../images/snooker.png" alt="" srcset="" style="width: 70px;">
                </div>
                <h5 class="card-title">12 State-of-the-Art Tables</h5>
                <p>Experience the thrill of playing on our top-quality snooker tables, meticulously maintained to ensure a perfect game every time.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 me-4">
            <div class="card">
              <div class="card-body bg-white rounded shadow p-4 text-center border-top border-4 box">
                <div class="icon ">
                  <img src="../images/tournament.png" alt="" srcset="" style="width: 70px;">
                </div>
                <h5 class="card-title">Tournaments and Events</h5>
                <p>Join our regular tournaments and events, designed to challenge and entertain players of all levels. From casual gatherings to competitive tournaments, we've got you covered.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 me-4">
            <div class="card">
              <div class="card-body bg-white rounded shadow p-4 text-center border-top border-4 box">
                <div class="icon ">
                  <img src="../images/training-1.png" alt="" srcset="" style="width: 70px;">
                </div>
                <h5 class="card-title">Expert Coaching and Training</h5>
                <p>Improve your game with our expert coaches and trainers, offering personalized lessons and group sessions to help you master the art of snooker.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h3 class="mb-3">Meet Our Team</h3>
            <div class="row justify-content-center">
              <div class="col-md-3 me-4">
                <img src="../images/p1.jpeg" class="w-100">
                <h5 class="card-title">Smit Don</h5>
                <p>Head Coach and Snooker Expert</p>
              </div>
              <div class="col-md-3 me-4">
                <img src="../images/p2.jpg" class="w-100">
                <h5 class="card-title">Maahi Shah </h5>
                <p>Tournament Director and Event Manager</p>
              </div>
              <div class="col-md-3 me-4">
                <img src="../images/p3.jpg" class="w-100">
                <h5 class="card-title">Harshita Jain</h5>
                <p>Facilities Manager and Snooker Enthusiast</p>
              </div>
            </div>
          </div>
        </div>
      </div>

        <?php include "footer.php";?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>