<?php
include('../files/config/dbconnect.php');


$id=$_GET['id'];
$query="delete from tbl_user where user_id=$id";
$res=mysqli_query($conn,$query);
if($res>0)
{
    header("location:admin.php");
}
else
{
    echo "not Deleted";
}
?>