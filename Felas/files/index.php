<?php
session_start();
if (!isset($_SESSION["username"])){
  header("Location: userlogin.php");
  exit();
}
?>

<!Doctype html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Felass</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Merienda:wght@700;400&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="maincss.css">
</head>

<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Felass</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <span>
            <h5 class="text-center me-3 mt-2" style="text-transform : uppercase">
              <?php echo htmlspecialchars($_SESSION['username']);?>
            </h5>
          </span>
          <button name="logout" type="submit"
            class="btn btn-outline-dark text-bold-dark font-weight-bold font-size-250px  shadow-none me-md-lg-3 m3-3 ">LOG
            OUT</button>
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


  <div class="container mt-0 mb-5 pt-0" id="mainbanner">
    <div class="">
        <p class="fw-bolder fs-sm-1 h1 text-center">Felas: The Billiards Palace</p>
        <p class="font-monospace fs-lg-3  text-center">Your friendly neighborhood billiards spot</p>
        <video autoplay muted loop id="myVideo" style="width: 100%; ">
            <source src="../images/bg-video.mp4" type="video/mp4">
        </video> <!-- Added closing video tag -->
    </div>
</div> <!-- Added closing div tag -->

  <section class="machines mt-5" id="about">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-primary  text-center text-decoration-underline mb-5" style="
          display: block;
          margin-top: 100px;">Our Special Tables </h1>
          <div class="desc row">
            <div class="col-md-12 row d-flex flex-wrap ">
              <img src="../images/2.jfif" alt="Machine 1" class="img-fluid mb-3 object-fit-fill height-cus col-md-6 " data-aos="flip-left" data-aos-easing="linear" data-aos-delay="200" data-aos-offset="0">
              <div class="col-md-6 align-content-center" data-aos="flip-right" data-aos-easing="linear" data-aos-delay="200" data-aos-offset="0">
                <p class="h2 text-decoration-underline">Classic Billiards Table</p>
                <p class="font-monospace">
                  Simplicity and elegance: The clean lines and traditional colors create a timeless look.<br>
                  Nostalgia: Evokes a sense of classic pool halls and games with friends.<br>
                  Versatility: Can be used for various website themes, from retro to contemporary.</p>
              </div>
            </div>

            <div class="col-md-12 row d-flex flex-wrap flex-column-reverse flex-md-row " >
              <div class="col-md-6 align-content-center" data-aos="flip-left" data-aos-easing="linear" data-aos-delay="300" data-aos-offset="0">
                <p class="h2 text-decoration-underline">Luxurious Mansion Billiards Table</p>
                <p class="font-monospace">
                  Opulence: The elegant surroundings and fine decor create a luxurious feel.<br>
                  High-end appeal: Ideal for websites targeting a premium audience.<br>
                  Sophistication: Adds a touch of class and refinement.
                </p>
              </div>
              <img src="../images/1.jfif" alt="Machine 2"
                class="img-fluid mb-3    object-fit-fill height-cus col-md-6"  data-aos="flip-right" data-aos-easing="linear" data-aos-delay="300" data-aos-offset="0"  >
            </div>
            <div class="col-md-12 row d-flex flex-wrap ">
              <img src="../images/3.jfif" alt="Machine 3"
                class="img-fluid mb-3    object-fit-fill height-cus col-md-6"  data-aos="flip-left" data-aos-easing="linear" data-aos-delay="300" data-aos-offset="0"  >
              <div class="col-md-6 align-content-center" data-aos="flip-right" data-aos-easing="linear" data-aos-delay="300" data-aos-offset="0">
                <p class="h2 text-decoration-underline">Quality stability</p>
                <p class="font-monospace">
                  Billiards balls are the essential components of the game, determining the flow and strategy of play.
                  Luxury billiards balls are a far cry from the standard resin balls used in most pool halls. These
                  high-end collectibles feature unique materials, intricate designs, and often come with a hefty price
                  tag</p>

              </div>
            </div>
            <div class="col-md-12 row d-flex flex-wrap flex-column-reverse flex-md-row">
              <div class="col-md-6 align-content-center" data-aos="flip-left" data-aos-easing="linear" data-aos-delay="300" data-aos-offset="0" >
                <p class="h2 text-decoration-underline">Energy saving and environmental protection</p>
                <p class="font-monospace">
                  A multi-table billiards room is a dream come true for those who love the classic game of pool. Whether
                  you're a seasoned pro or a casual player, these spacious venues offer a variety of tables and
                  amenities to cater to all skill levels and preferences.
                </p>
              </div>
              <img src="../images/multi-table.png" alt="Machine 4"
                class="img-fluid mb-3 object-fit-fill height-cus col-md-6" data-aos="flip-right" data-aos-easing="linear" data-aos-delay="300" data-aos-offset="0">
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us container" id="contact-us">
    <h2 class="title">Our Address</h2>
    <p class="description">You can find us at:</p>
    <div class=" row">
        <div class="col-md-6 pb-2" >
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.1031835026433!2d72.77272267380114!3d21.148291583665184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d49bdaceba9%3A0xdabc05512558c078!2sFelas%20Snooker%20zone!5e0!3m2!1sen!2sin!4v1721825049299!5m2!1sen!2sin"
              width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <DIV class="col-md-6">
        <address>
          <br><strong class="title h3">Felas Snooker zone</strong><br>
          <p>beside Pooja abhishek, opp. central market, Vesu, Surat, Gujarat 395007</p>
          <abbr title="Phone">Phone:</abbr> 09228377777<br>
          <abbr title="Email">Email:</abbr> <a href="mailto:info@felas.com">info@felas.com</a>
        </address>
        <h2 class="title">Follow Us</h2>
        <p class="description">Stay up-to-date with our latest news and updates:<br>
          <a href="#" target="_blank"><i class=" me-2 fab fa-facebook-f"></i></a>
          <a href="#" target="_blank"><i class=" me-2 fab fa-twitter"></i></a>
          <a href="#" target="_blank"><i class=" me-2 fab fa-instagram"></i></a>
          <a href="#" target="_blank"><i class=" me-2 fab fa-linkedin-in"></i></a>
        </p>
      </DIV>
    </div>
  </section>




  <?php include "footer.php";?>

  <?php
      include_once "./config/dbconnect.php";
    
    if(isset($_POST['register']))
    {
       
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password=$_POST['password'];
        $phone = $_POST['contact_no'];
        $address = $_POST['address'];
       
         $insert = mysqli_query($conn,"INSERT INTO `users`
         (`first_name`,`last_name`,`email`,`password`,`contact_no`,`address`)   VALUES ('$first_name','$last_name','$email','$password','$phone','$address')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: userlogin.php");
             exit();
         }
         else
         {
             echo "<script>alert('Registered Succesfully')</script>";
            //  header("Location: contact.php");
            }
        
       }
?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>	
	<script>
		AOS.init();
	</script>

</body>

</html>