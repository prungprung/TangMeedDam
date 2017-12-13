<?php
session_start();
$conn= mysqli_connect("localhost","root","","csboutdoor") or die("Error: " . mysqli_error($con));
mysqli_query($conn, "SET NAMES 'utf8' ");

$stockid = $_REQUEST['stockid'];
$act = $_REQUEST['act'];

if($act =='add' && !empty($stockid)){
$sql = "UPDATE stock set quntity = quntity+ 1 WHERE stockid='".$stockid."'";
$query = mysqli_query($conn,$sql);
Header("Location:admin.php");
}

/*
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($query);
if (mysqli_num_rows($result)>0) {
  while ($row = mysqli_fetch_array($result)) {
    $stockid = $row['stockid'];
    $stockname = $row['stockname'];
    $price = $row['price'];
    $quntity = $row['quntity'];
  }
  echo $quntity;
}
}
*/


?>
