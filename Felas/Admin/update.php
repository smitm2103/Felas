<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
<body>
<?php
include('../files/config/dbconnect.php');
$id=$_GET['id'];
$query="select * from tbl_cat where cat_id=$id";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
$name=$row['cat_name'];
// $desc=$row['food_desc'];
$pric=$row['price'];



?>
    <h2 class="m-3">Update Table</h2>
    <hr>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
            <form method="post">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"> Update Table Name</i></span>
            <input type="text" class="form-control" name="fname" value="<?php echo $name?>" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <!-- <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
            <input type="text" class="form-control" name="fdesc" value="<?php echo $desc?>" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
          </div> -->
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
            <input type="text" class="form-control" name="fprize" value="<?php echo $pric?>" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
          </div>    
          <div>
            <button type="Submit" class="btn btn-primary" name="submit">Update</button>
          </div>
          </form>       
            </div>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['fname'];
    // $desc=$_POST['fdesc'];
    $prize=$_POST['fprize'];


    $query="update tbl_cat set cat_name='$name',price='$prize' where cat_id=$id";
    //echo $query;
    $res=mysqli_query($conn,$query);
    if($res>0)
    {
        header("location:cat1.php");
    }
    else
    {
        echo "Not updated";
    }


  }


?>