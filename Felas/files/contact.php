<?php
include_once("../files/config/dbconnect.php");
session_start();
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
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

<nav class="navbar navbar-expand-lg navbar-light bg-white">
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
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mt-5 px-4">
                        <div class="bg-white rounded shadow p-4">
                        <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1031835026433!2d72.77272267380114!3d21.148291583665184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d49bdaceba9%3A0xdabc05512558c078!2sFelas%20Snooker%20zone!5e0!3m2!1sen!2sin!4v1721825049299!5m2!1sen!2sin" loading="lazy"></iframe> 
                            <h5>Address</h5>
                            <a href="https://maps.app.goo.gl/QGqEQgTyg6Fy7TeW6 " target="_blank" class="d-inline-block text-dark text-decoration-none mb-3">
                            <i class="bi bi-geo-alt-fill"></i>Beside Pooja Abhishek,Felas snooker zone
                            </a>
                            <h5 class="mt-4">Call Us</h5>
                                <a href="tel: 9876543210" class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill me-2"></i>9876543210</a>
                                <br>
                                <a href="tel: 9876543210" class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill me-2"></i>9876543210</a>
                                <h5 class="mt-4">Mail Us</h5>
                                <a href="mailto: abc12@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-envelope-at-fill me-2"></i>mailto: abc12@gmail.com
                                </a>
                                <h5 class="mt-4">Follow Us</h5>
                                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                                    <i class="bi bi-twitter me-2"></i></a>
                                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                                    <i class="bi bi-instagram me-2"></i></a>
                                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                                    <i class="bi bi-facebook me-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5 mt-5 px-4">
                        <div class="bg-white rounded shadow p-4">
                            <form method="POST">
                            <h5>Send A Message</h5>
                            <div class="mt-3">
                                    <label class="form-label" style="font-weight:500">Name</label>
                                    <input name="name" required type="text" class="form-control shadow-none">
                                    </div>
                                    <div class="mt-3">
                                    <label class="form-label" style="font-weight:500">Email</label>
                                    <input name="email" required  type="email" class="form-control shadow-none">
                                    </div>
                                    <div class="mt-3">
                                    <label class="form-label" style="font-weight:500">Subject</label>
                                    <input name="subject" required type="text" class="form-control shadow-none">
                                    </div>
                                    <div class="mt-3">
                                    <label class="form-label" style="font-weight:500">Message</label>
                                    <textarea name="message" required class="form-control shadow-none" rows="5" style="resize:none"></textarea>
                                    </div>
                                    <div class="text-center mt-4">
                                    <button name="send" type="submit" class="btn btn-dark shadow-none">SEND</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


          <?php
              include_once "./config/dbconnect.php";
    
              if(isset($_POST['send']))
              {
                 
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $subject = $_POST['subject'];
                  $message = $_POST['message'];
                 
                   $insert = mysqli_query($conn,"INSERT INTO `contact`
                   (`name`,`email`,`subject`,`message`)   VALUES ('$name','$email','$subject','$message')");
           
                   if(!$insert)
                   {
                       echo mysqli_error($conn);
                       header("Location: index.php");
                   }
                   else
                   {
                       echo "<script>alert('Recorded Succesfully')</script>";
                      //  header("Location: contact.php");
                      }
                  
                 }
          ?>

          <?php include "footer.php";?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
 