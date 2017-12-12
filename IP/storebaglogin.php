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
      <h2>CATEGORY<h2>


        <button class="button" onclick="window.location.href='storeknifelogin.php'">&nbsp;Knife&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storetentlogin.php'">&nbsp;Tent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storebaglogin.php'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bag&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storeoutfitlogin.php'">&nbsp;&nbsp;Oytfit&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storeetclogin.php'">&nbsp;&nbsp;&nbsp;ETC.&nbsp;&nbsp;</button>
    </div>
  </div>
  <div class="column middle">
    <div class="centerspace" id="centerspace">
      <p><h1>Bagback</h1></p>
      <table style="width:80%">
  <tr>
    <th>Picture</th>
    <th>Name</th>
    <th>Price</th>
    <th>&emsp;&emsp;&emsp;Buy</th>

  </tr>
  <tr>
    <td><img src="backbag.jpg" alt="backbag" width="150" height="150"></td>
    <td>WASING 55L</td>
    <td>1,900</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Hello world!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="backbag2.jpg" alt="backbag" width="150" height="150"></td>
    <td>TETON Sports Explorer 4000</td>
    <td>2,500</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Hello world!')">Buy</button></td>
  </tr>

  <tr>
    <td><img src="backbag3.jpg" alt="backbag" width="150" height="150"></td>
    <td>G4Free 50L Outdoor Backpack</td>
    <td>1,650</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Hello world!')">Buy</button></td>
  </tr>
</table>

  </div>
  </div>
  <div class="column side">
    <div class="rightspace" id="rightspace">
    <table style="width:95%">

      <tr><th><a href="https://www.buckknives.com/"><img src="Buck.jpg" alt="knife" width="150" height="150"></a><br><br>
      </th></tr>
      <tr><th><a href="https://www.leatherman.com/"><img src="leatherman.jpg" alt="knife" width="150" height="150"></a><br><br>
      </th></tr>
      <tr><th><a href="http://www.swisstechtools.com/"><img src="swisstech.jpg" alt="knife" width="150" height="150"></a><br><br></th></tr>
  </table>
  </div>
  </div>
</div>
</body>
</html>
