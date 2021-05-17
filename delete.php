<?php
include'conn.php';
if(isset($_GET['id'])){
    $userId=$_GET['id'];
    $q="DELETE FROM `crud` WHERE username='".$userId."'";
    $res=mysqli_query($con,$q);
}
header('location:display.php');
?>