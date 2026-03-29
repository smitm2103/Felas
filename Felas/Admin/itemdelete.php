<?php
include('../files/config/dbconnect.php');
$id=$_GET['id'];
$query="delete from tbl_cat where cat_id=$id";
$res=mysqli_query($conn,$query);
if($res>0)
{
    header("location:cat1.php");
}
else
{
    echo "not Deleted";
}
?>