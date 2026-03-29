<?php
include_once('../files/config/dbconnect.php');
include('admin.php');


if(isset($_POST['submit']))
{
	$name=$_POST['fname'];
  // $desc=$_POST['fdesc'];
  $prize=$_POST['fprize'];
  // $food_type=$_POST['food_type'];
	
// $qry="INSERT into tbl_cat (`food_id`, `food_name`, `food_desc`, `price`, `food_type`) VALUES ('','$name','$desc','$prize','$food_type')";
	 $qry="INSERT INTO tbl_cat (`cat_id`, `cat_name`, `price`) VALUES (NULL, '$name', '$prize');" ;
	$res=mysqli_query($conn,$qry);   
  if($res>0){ 
  //  header("location:menu.php");
  }
 
}	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
	<title>CRUD OPRATION EXAMPLE</title>

    <style>
        img{
            height: 100px;
            width: 150px;
        }
        th,td{
            text-align: center;
        }
    </style>
</head>

<body>
<div class="container">
	<button class="btn btn-info" data-bs-target="#modal1" aria-controls="modal1" data-bs-toggle="modal"><i class="bi bi-plus-circle"></i> Add Table </button>
	<div class="row justify-content-center">
		<div class="col-lg-12">
<table class="table table-secondary">
	<thead>
			
		<tr>
		
			<th>TABLE NAME</th>
			<!-- <th>FOOD DESCPTION</th> -->
      <th>TABLE PRIZE</th>
			<th>DELETE</th>
			<th>UPDATE</th>
			
		</tr>
	</thead>
    <tbody>

    <?php 

$query="SELECT * FROM tbl_cat";

$res=mysqli_query($conn,$query);

$count=mysqli_num_rows($res);

if ($count>0){
	while($row=mysqli_fetch_assoc($res)){
		echo"<tr>";
	echo "<td>".$row['cat_name']."</td>";
	// echo "<td>".$row['food_desc']."</td>";
  echo "<td>".$row['price']."</td>";
   
	?>

<td><a href="itemdelete.php?id=<?=$row['cat_id'];?>"><i id="i1" class="bi bi-trash3-fill text-danger"></i></a>    
	</td> 	
			<td><a href="update.php?id=<?=$row['cat_id'];?>"><i id="i1" class="bi bi-pencil-square text-primary"></i></a></td>

	<?php

	echo"</tr>";
}
}
else
{
	echo "NO data Found";
}
?>
</tbody>
</table>
</div>
</div>
<div class="modal" id="modal1">
  <div class="modal-dialog">
  	<form method="POST" >
    <div class="modal-content">
      <div class="modal-header bg-secondary">
        <h3 class="modal-title">Add Table Category</h3>
        <button class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
      </div>
    
      <div class="modal-body">
        <p class="lead text-center">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-bag-check-fill"></i></span>
            <input type="text" name="fname" class="form-control" placeholder="Table Name" aria-label="Item_Type" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
		        <span class="input-group-text" id="basic-addon1"><i class="bi bi-bag-check-fill"></i></span>
            <input type="text" name="fprize" class="form-control" placeholder="Prize " aria-label="Item_Type" aria-describedby="basic-addon1">
          </div>

         <div class="modal-footer">
        <button class="btn btn-outline-primary" data-bs-dismiss="modal">CLOSE</button>
        <button class="btn btn-outline-primary" name="submit" type="submit">ADD</button>
         </div>

  </form>
    </div>
  </div>
</div>


</body>
</html>