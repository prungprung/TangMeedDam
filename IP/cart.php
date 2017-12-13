<?php
session_start();
if (isset($_REQUEST['stockid'])) {
  $p_id = $_REQUEST['stockid'];
}else {
  $p_id ='';
  }
	$act = $_REQUEST['act'];
	if($act=='add' && !empty($p_id))
	{
		if(isset($_SESSION['cart'][$p_id]))
		{
			$_SESSION['cart'][$p_id]++;
		}
		else
		{
			$_SESSION['cart'][$p_id]=1;
		}
	}

	if($act=='remove' && !empty($p_id))
	{
		unset($_SESSION['cart'][$p_id]);
	}

	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{
			$_SESSION['cart'][$p_id]=$amount;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
</head>

<body background="BG2.jpg">
<form id="frmcart" name="frmcart" method="post" action="?act=update">
  <table width="600" border="0" align="center" class="square">
    <tr>
      <td colspan="5" bgcolor="#CCCCCC">
      <b>ตะกร้าสินค้า</span></td>
    </tr>
    <tr>
      <td bgcolor="#EAEAEA">สินค้า</td>
      <td align="center" bgcolor="#EAEAEA">ราคา</td>
      <td align="center" bgcolor="#EAEAEA">จำนวน</td>
      <td align="center" bgcolor="#EAEAEA">รวม(บาท)</td>
      <td align="center" bgcolor="#EAEAEA">ลบ</td>
    </tr>
<?php
	$conn= mysqli_connect("localhost","root","","csboutdoor") or die("Error: " . mysqli_error($con));
	mysqli_query($conn, "SET NAMES 'utf8' ");

$total=0;
if(!empty($_SESSION['cart']))
{

	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql = "SELECT * FROM stock where stockid='".$p_id."'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($query);
		$sum = $row['price'] * $qty;
		$total += $sum;
		echo "<tr>";
		echo "<td width='334' bgcolor= '#EAEAEA'>" . $row["stockname"] . "</td>";
		echo "<td width='46' bgcolor= '#EAEAEA'  align='right'>" .number_format($row["price"],2) . "</td>";
		echo "<td width='57' bgcolor= '#EAEAEA' align='right'>";
		echo "<input type='text' bgcolor= '#EAEAEA' name='amount[$p_id]' value='$qty' size='2' stockid= '$p_id' /></td>";
		echo "<td width='93' bgcolor= '#EAEAEA' align='right'>".number_format($sum,2)."</td>";
		//remove product
		echo "<td width='46' bgcolor= '#EAEAEA' align='center'><a href='cart.php?stockid=$p_id&act=remove'>ลบ</a></td>";
		echo "</tr>";
	}
	echo "<tr>";
  	echo "<td colspan='3' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
  	echo "<td align='right' bgcolor='#CEE7FF'>"."<b>".number_format($total,2)."</b>"."</td>";
  	echo "<td align='left' bgcolor='#CEE7FF'></td>";
	echo "</tr>";
}
?>
<tr>
<td><a href="Goodslogin.php">กลับหน้ารายการสินค้า</a></td>
<td colspan="4" align="right">
    <input type="submit" name="button" id="button" value="ปรับปรุง" />
    <input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='cutstock.php'" />
</td>
</tr>
</table>
</form>
</body>
</html>
