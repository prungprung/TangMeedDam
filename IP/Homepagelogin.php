<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <?php session_start(); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="Homepage.css">

  <style>
  .button {
      background-color: #696969;
      border: none;
      color: black;
      padding: 5px 90px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
  }

  </style>

</head>
<body background="BG2.jpg">
  <div class="jumbotron jumbotron-fluid" id="headerJumbo">
    <div class="container" id="jumboHead">

      <div id="picinjumbo">
<img src="store.jpg" alt="knife" width="2000" height="200">
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark" id = "navbar">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="Homepagelogin.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Goodslogin.php">Item</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Homepage.php">Logout</a>
    </li>
  </ul>
</nav>
<div class="row">
  <div class="column side">

    <div class = "leftspace" id="leftspace">
      <label class="user"  align ="center" >Username&ensp;:&ensp;<?php echo $_SESSION["fname"]; ?>
      <label class="user"  align ="center" >Email&ensp;:&ensp;<?php echo $_SESSION["email"]; ?></lable></lable><br><br>
      <h2>CATEGORY<h2>


        <button class="button" onclick="window.location.href='storeknifelogin.php'">&nbsp;Knife&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storetentlogin.php'">&nbsp;Tent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storebaglogin.php'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bag&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storeoutfitlogin.php'">&nbsp;&nbsp;Outfit&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storeetclogin.php'">&nbsp;&nbsp;&nbsp;ETC.&nbsp;&nbsp;</button>
    </div>
  </div>
  <div class="column middle">
    <div class="centerspace" id="centerspace">
      <p><h1>New Item</h1></p>
      <table style="width:100%">
      <tr>
        <th><img src="buck.jpg" alt="knife" width="200" height="200">
      </th>
        <th><img src="etc.jpg" alt="knife" width="200" height="200">
        </th>
        <th><img src="outfit2.jpg" alt="knife" width="200" height="200">
        </th>
      </tr>
      <tr>
        <td><div ail>สินค้านี้กำลังจะว่าจำหน่ายในเว็ปนี้</td>
        <td>Fenix TK20R ที่ฉายได้ไกลถึง20ม.</td>
        <td>รองเท้าหุ้มข้อสำหรับเดินป่า</td>

      </tr>
    </table>

    <p><h1>Recommend</h1></p>
    <table style="width:95%">
    <tr>
      <th><img src="outfit.jpg" alt="knife" width="200" height="200"><br><br>
      เสื้อกันหนาวและป้องกันน้ำ</th>
      <th><img src="etc2.jpg" alt="knife" width="200" height="200"><br><br>
    อุปกรณ์ทำอาหารกลางแจ้ง</th>
      <th><img src="outfit3.jpg" alt="knife" width="200" height="200"><br><br>
      กางเกงเดินป่ากันน้ำ</th>
    </tr>
  </table>
  </div>
  </div>
  <div class="column side">
    <div class="rightspace" id="rightspace">
      <p><h1>BRAND</h1></p>
    <table style="width:95%">

      <tr><th><a href="https://www.buckknives.com/"><img src="Buck.jpg" alt="knife" width="150" height="150"></a><br><br>
      </th></tr>
      <tr><th><a href="https://www.leatherman.com/"><img src="leatherman.jpg" alt="knife" width="150" height="150"></a><br><br>
      </th></tr>
      <tr><th><a href="http://www.swisstechtools.com/"><img src="swisstech.jpg" alt="knife" width="150" height="150"></a><br><br></th></tr>
      <tr><th><a href="https://www.511tactical.com/"><img src="5.11.jpg" alt="knife" width="150" height="150"></a><br><br></th></tr>
  </table>
  </div>
  </div>
</div>
</body>
</html>
