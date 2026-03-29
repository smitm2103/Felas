<?php
include('admin.php');
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
	<div class="row justify-content-center">
		<div class="col-lg-12">
<table class="table table-secondary">
	<thead>
			
		<tr>
			<th>Brand ID</th>
			<th>Brand Name</th>
			<th>Image</th>
			<th>Delete</th>
			
		</tr>
	</thead>
    <tbody>



    <?php 
$con = mysqli_connect("localhost","root","","rental1");

$query="SELECT * FROM tbl_vehicle order by v_id";

$res=mysqli_query($con,$query);

$count=mysqli_num_rows($res);

if ($count>0){
	while($row=mysqli_fetch_assoc($res)){
		echo"<tr>";
	echo "<td>".$row['v_id']."</td>";
	echo "<td>".$row['v_name']."</td>";
    echo "<td> <img src='" . $row['v_img'] . "' class='img-circle'></td>";
	?>

<td><a href="vehicle_del.php?id=<?php echo $row['v_id'];?>"><i id="i1" class="bi bi-trash3-fill text-danger"></i></a>    
	</td> 	

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

</div>


</body>
</html>