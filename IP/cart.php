
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csboutdoor";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$idpro = $_POST['addcart'];

$sql = "SELECT * FROM stock
 WHERE '$idpro' = stockid AND quntity != 0";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $stock_id = $row['stockid'];
    $stock_name = $row['stockname'];
    $stock_price = $row['price'];
    echo $stock_id." ".$stock_name." ".$stock_price;
  }
}
$_SESSION["sid"] =$row["stockid"];
$_SESSION["sname"] = $row["stockname"];
$_SESSION["sprice"] =$row["price"];
 ?>
