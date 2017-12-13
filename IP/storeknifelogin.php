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
        <button class="button"onclick="window.location.href='storebaglogin.php'">BackBag&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storeoutfitlogin.php'">&nbsp;&nbsp;Outfit&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storeetclogin.php'">&nbsp;&nbsp;&nbsp;ETC.&nbsp;&nbsp;</button>
    </div>
  </div>

  <div class="column middle">
    <div class="centerspace" id="centerspace">
      <p><h1>Knife</h1></p>
      <form action="cart.php" method="post">
      <table style="width:100%" class="table">
  <tr>
    <th>Picture</th>
    <th>Name</th>
    <th>Price</th>
    <th>Add to cart</th>
  </tr>
  <tr>
    <td><img src="swisstechknife1.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text" >kershaw Hype</div></td>
    <td><div class="text" >2,000</div></td>
    <td><div class="text"><a href='cart.php? stockid= 1 &act=add'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="swisstechknife2.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text">Jackson orange</div></td>
    <td><div class="text">3,500</div></td>
    <td><div class="text"><a href='cart.php? stockid= 2 &act=add'>Add to cart</a></div></td>
  </tr>

  <tr>
    <td><img src="leathermanknife1.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text" >Leatherman Wave</div></td>
    <td><div class="text" >5,000</div></td>
    <td><div class="text" ><a href='cart.php? stockid= 3 &act=add'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="leathermanknife2.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text" >Leatherman Wingman</div></td>
    <td><div class="text" >4,500</div></td>
    <td><div class="text" ><a href='cart.php? stockid= 4 &act=add'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="buckknife1.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text" >Buck 845 Vantage Force</div></td>
    <td><div class="text" >9,000</div></td>
    <td><div class="text" ><a href='cart.php? stockid= 5 &act=add'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="buckknife2.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text" >Buck 284 Bantam BBW</div></td>
    <td><div class="text" >6,535</div></td>
    <td><div class="text" ><a href='cart.php? stockid= 6 &act=add'>Add to cart</a></div></td>
  </tr>
</table>
</form>

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
