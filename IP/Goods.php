<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <?php session_start(); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
      <a class="nav-link" href="Homepage.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Goods.php">Item</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
      <li class="nav-item">
        <a class="nav-link" href="Register.php">Register</a>
      </li>
    </li>
  </ul>
</nav>
<div class="row">
  <div class="column side">



    <div class = "leftspace" id="leftspace">
      <p>&emsp;&emsp;&emsp;&emsp;&emsp;Not Login</P>
      <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CATEGORY<h2>


        <button class="button" onclick="window.location.href='storeknife.php'">&nbsp;Knife&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storetent.php'">&nbsp;&nbsp;&nbsp;&nbsp;Tent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storebag.php'">BackBag&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storeoutfit.php'">&nbsp;&nbsp;&nbsp;&nbsp;Outfit&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storeetc.php'">&nbsp;&nbsp;&nbsp;ETC.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
    </div>
  </div>
  <div class="column middle">
    <div class="centerspace" id="centerspace">
      <p><h1>All Item</h1></p>
      <table style="width:90%" class="table">
  <tr>
    <th>Picture</th>
    <th>Name</th>
    <th>Price</th>
    <th>Add cart</th>

  </tr>
  <tr>
    <td><img src="swisstechknife1.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text" >kershaw Hype</div></td>
    <td><div class="text" >2,000</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="swisstechknife2.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text" >Jackson orange</div></td>
    <td><div class="text" >3,500</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>

  <tr>
    <td><img src="leathermanknife1.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text" >Leatherman Wave</div></td>
    <td><div class="text" >5,000</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="leathermanknife2.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text" >Leatherman Wingman</div></td>
    <td><div class="text" >4,500</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="buckknife1.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text" >Buck 845 Vantage Force</div></td>
    <td><div class="text" >9,000</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="buckknife2.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text" >Buck 284 Bantam BBW</div></td>
    <td><div class="text" >6,535</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="Tent.jpg" alt="Tent" width="150" height="150"></td>
    <td><div class="text" >Half Dome 2 Plus</div></td>
    <td><div class="text" >8,500</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="Tent2.jpg" alt="Tent" width="150" height="150"></td>
    <td><div class="text" >OneLink Shelter</div></td>
    <td><div class="text" >7,500</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>

  <tr>
    <td><img src="Tent3.jpg" alt="Tent" width="150" height="150"></td>
    <td><div class="text" >Kingdom 6 Tent</div></td>
    <td><div class="text" >10,500</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="backbag.jpg" alt="backbag" width="150" height="150"></td>
    <td><div class="text" >WASING 55L</div></td>
    <td><div class="text" >1,900</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="backbag2.jpg" alt="backbag" width="150" height="150"></td>
    <td><div class="text" >TETON Sports Explorer 4000</div></td>
    <td><div class="text" >2,500</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>

  <tr>
    <td><img src="backbag3.jpg" alt="backbag" width="150" height="150"></td>
    <td><div class="text" >G4Free 50L Outdoor Backpack</div></td>
    <td><div class="text" >1,650</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="outfit.jpg" alt="outfit" width="150" height="150"></td>
    <td><div class="text" >MOUNTAIN JACKET</div></td>
    <td><div class="text" >16,000</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="outfit2.jpg" alt="outfit" width="150" height="150"></td>
    <td><div class="text" >SNOWFUSE BOOTS</div></td>
    <td><div class="text" >2,700</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>

  <tr>
    <td><img src="outfit3.jpg" alt="outfit" width="150" height="150"></td>
    <td><div class="text" >MOTION PANTS</div></td>
    <td><div class="text" >2,950</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="outfit4.jpg" alt="outfit" width="150" height="150"></td>
    <td><div class="text" >SHERPA GAITER</div></td>
    <td><div class="text" >900</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div></td>
  </tr>
  <tr>
    <td><img src="etc4.jpg" alt="etc" width="150" height="150"></td>
    <td><div class="text" >Flexlite Table</div></td>
    <td><div class="text" >3,500</div></td>
    <td><div class="text" ><a href='plogin.php'>Add to cart</a></div> </td>
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
  </table>
  </div>
  </div>
</div>
</body>
</html>
