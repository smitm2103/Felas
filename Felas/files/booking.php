<?php
include_once "../files/config/dbconnect.php";
session_start();
?>
<!Doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE BOOKING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700;400&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<link rel="stylesheet" href="maincss.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>
<body >

              
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

                <div class="bg-image"></div>

                <div class="booking-form">
      <h2>BOOK TABLE!!</h2>
      <form method="POST">
          <label for="name">Table No</label>
          <input type="tel" id="name" name="table_no" required>


          <label for="name">Table Name</label>
          <input type="text" id="name" name="table_name" required>
          
          <label for="name">User Name</label>
          <input type="text" id="name" name="user_name" required>

          <label for="phone">Phone Number:</label>
          <input type="number" id="phone" name="phone" required>

          <label for="date">Booking Date:</label>
          <input type="date" id="date" name="date" required>

          <label for="time">Booking Time:</label>
          <input type="text" id="time" name="time" required>

          <input name="submit" type="submit" value="Submit">
      </form>
<script>
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('date').setAttribute('min',today);

  // Initialize Flatpickr for time input
  flatpickr("#time", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "h:i:S K", // h:i:S K is for hours:minutes:seconds AM/PM
    time_24hr: false, // Set to true if you want a 24-hour format
    secondIncrement: 1 // Enables seconds selection
  });
  
</script>

</div>

<?php
              include_once "./config/dbconnect.php";
    
              if(isset($_POST['submit']))
              {
                  $table_no = $_POST['table_no'];
                  $table_name = $_POST['table_name'];
                  $user_name = $_POST['user_name'];
                  $phone=$_POST['phone'];
                  $date = $_POST['date'];
                  $time = $_POST['time'];
                 
                   $insert = mysqli_query($conn,"INSERT INTO `tbl_table`
                   (`table_no`,`table_name`,`user_name`,`Mobile`,`date`,`time`)   VALUES ('$table_no','$table_name','$user_name','$phone','$date','$time')");
           
                   if(!$insert)
                   {
                       echo mysqli_error($conn);
                       header("Location: index.php");
                   }
                   else
                   {
                       echo "<script>alert('Booked Succesfully')</script>";
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
