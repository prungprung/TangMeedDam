<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csboutdoor";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['username'];
$mail = $_POST['email'];
$pass = $_POST['password'];

$sql = " SELECT * FROM member WHERE Email ='$mail' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)==0) {

  $sql = "INSERT INTO member (ID,Username,Email,Password) VALUES ('' , '$name','$mail', ' $pass ')";
  echo "66699";
  if (mysqli_query($conn, $sql)) {
    echo "6666";
    echo "<script type='text/javascript'>alert('Edit Successfully');</script>";
    Header("refresh: 0;Homepage.php");

  } else {
    echo "555555";
        echo "<script>";
        echo "swal('Fail');";
        echo "window.history.back()";
        echo "</script>";
  }
}
mysqli_close($conn);


?>
