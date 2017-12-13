<?php
session_start();
$conn= mysqli_connect("localhost","root","","csboutdoor") or die("Error: " . mysqli_error($con));
mysqli_query($conn, "SET NAMES 'utf8' ");
foreach($_SESSION['cart'] as $p_id=>$qty)
{
  $sql = "UPDATE stock SET quntity = quntity - $qty where stockid='".$p_id."'";
  $query = mysqli_query($conn,$sql);
}
Header("Location:homepagelogin.php");
?>
