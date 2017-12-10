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
      <h2>CATEGORY<h2>


        <button class="button" onclick="window.location.href='storeknife.php'">&nbsp;Kinfe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storetent.php'">&nbsp;&nbsp;&nbsp;&nbsp;Tent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storebag.php'">BackBag&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storeoutfit.php'">&nbsp;&nbsp;&nbsp;&nbsp;Outfit&nbsp;&nbsp;</button><br>
        <button class="button"onclick="window.location.href='storeetc.php'">&nbsp;&nbsp;&nbsp;ETC.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
    </div>
  </div>
  <div class="column middle">
    <div class="centerspace" id="centerspace">
      <p><h1>Knife่</h1></p>
      <table style="width:80%">
  <tr>
    <th>Picture</th>
    <th>Name</th>
    <th>Price</th>
    <th>&emsp;&emsp;&emsp;Buy</th>

  </tr>
  <tr>
    <td><img src="swisstechknife1.jpg" alt="knife" width="150" height="150"></td>
    <td>kershaw Hype</td>
    <td>2,000</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="swisstechknife2.jpg" alt="knife" width="150" height="150"></td>
    <td>Jackson orange</td>
    <td>3,500</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>

  <tr>
    <td><img src="leathermanknife1.jpg" alt="knife" width="150" height="150"></td>
    <td>Leatherman Wave</td>
    <td>5,000</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="leathermanknife2.jpg" alt="knife" width="150" height="150"></td>
    <td>Leatherman Wingman</td>
    <td>4,500</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="buckknife1.jpg" alt="knife" width="150" height="150"></td>
    <td>Buck 845 Vantage Force</td>
    <td>9,000</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="buckknife2.jpg" alt="knife" width="150" height="150"></td>
    <td>Buck 284 Bantam BBW</td>
    <td>6,535</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="Tent.jpg" alt="Tent" width="150" height="150"></td>
    <td>Half Dome 2 Plus</td>
    <td>8,500</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="Tent2.jpg" alt="Tent" width="150" height="150"></td>
    <td>OneLink Shelter</td>
    <td>7,500</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>

  <tr>
    <td><img src="Tent3.jpg" alt="Tent" width="150" height="150"></td>
    <td>Kingdom 6 Tent</td>
    <td>10,500</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="backbag.jpg" alt="backbag" width="150" height="150"></td>
    <td>WASING 55L</td>
    <td>1,900</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="backbag2.jpg" alt="backbag" width="150" height="150"></td>
    <td>TETON Sports Explorer 4000</td>
    <td>2,500</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>

  <tr>
    <td><img src="backbag3.jpg" alt="backbag" width="150" height="150"></td>
    <td>G4Free 50L Outdoor Backpack</td>
    <td>1,650</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="outfit.jpg" alt="outfit" width="150" height="150"></td>
    <td>MOUNTAIN JACKET</td>
    <td>16,000</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="outfit2.jpg" alt="outfit" width="150" height="150"></td>
    <td>SNOWFUSE BOOTS</td>
    <td>2,700</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>

  <tr>
    <td><img src="outfit3.jpg" alt="outfit" width="150" height="150"></td>
    <td>MOTION PANTS</td>
    <td>2,950</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="outfit4.jpg" alt="outfit" width="150" height="150"></td>
    <td>SHERPA GAITER</td>
    <td>900</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="etc.jpg" alt="etc" width="150" height="150"></td>
    <td>Fenix TK20R</td>
    <td>3,500</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="etc2.jpg" alt="etc" width="150" height="150"></td>
    <td>Pinnacle Dualist Cookset</td>
    <td>5,800</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>

  <tr>
    <td><img src="etc3.jpg" alt="etc" width="150" height="150"></td>
    <td>Camp Folding Cot</td>
    <td>2,300</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
  </tr>
  <tr>
    <td><img src="etc4.jpg" alt="etc" width="150" height="150"></td>
    <td>Flexlite Table</td>
    <td>3,500</td>
    <td>&emsp;&emsp;&emsp;<button type="button" onclick="alert('Please Login !!')">Buy</button></td>
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
