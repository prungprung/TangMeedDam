<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <?php session_start();
  $conn= mysqli_connect("localhost","root","","csboutdoor") or die("Error: " . mysqli_error($con));
  mysqli_query($conn, "SET NAMES 'utf8' "); ?>
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
    <li class="nav-item">
      <a class="nav-link" href="Homepage.php">Logout</a>
    </li>
  </ul>
</nav>
<div class="row">
  <div class="column side">

    <div class = "leftspace" id="leftspace">
      <h2>ADMIN<h2>

    </div>
  </div>
  <div class="column middle">
    <div class="centerspace" id="centerspace">
      <p><h1>Add Product</h1></p>
      <form  action="insertadd.php" method="POST" te>
      <table style="width:80%" class="table">
  <tr>
    <th>Picture</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Buy</th>

  </tr>
  <tr>
    <td><img src="swisstechknife1.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text" >kershaw Hype</a></td>
    <td><div class="text" >3,500</a></td>
    <td><div class="text">
      <?php
    $sql2 = "SELECT quntity FROM stock WHERE stockid = 1 ";
    $query = mysqli_query($conn,$sql2);
    $row = mysqli_fetch_assoc($query);
    echo $row['quntity'];
    ?>
  </a>
  </td>
    <td><div class="text"><a href='insertadd.php? stockid= 1 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="swisstechknife2.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text">Jackson orange</div></td>
    <td><div class="text">3,500</div></td>
    <td><div class="text"><?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 2 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?></div></td>
    <td><div class="text"><a href='insertadd.php? stockid= 2 &act=add'> Add</a></td>
    </div>
  </tr>
  <tr>
    <td><img src="leathermanknife1.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text">Leatherman Wave</div></td>
    <td><div class="text">5,000</div></td>
    <td><div class="text"><?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 3 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 3 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="leathermanknife2.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text">Leatherman Wingman</div></td>
    <td><div class="text">4,500</div></td>
    <td>
      <div class="text">
      <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 4 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 4 &act=add'> Add</a><div></td>
  </tr>
  <tr>
    <td><img src="buckknife1.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text">Buck 845 Vantage Force</div></td>
    <td><div class="text">9,000</div></td>
    <td>
      <div class="text">
      <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 5 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 5 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="buckknife2.jpg" alt="knife" width="150" height="150"></td>
    <td><div class="text">Buck 284 Bantam BBW</div></td>
    <td><div class="text">6,535</div></td>
    <td>
      <div class="text">
      <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 6 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];

      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 6 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="Tent.jpg" alt="Tent" width="150" height="150"></td>
    <td><div class="text">Half Dome 2 Plus</div></td>
    <td><div class="text">8,500</div></td>
    <td>
      <div class="text">
      <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 7 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 7 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="Tent2.jpg" alt="Tent" width="150" height="150"></td>
    <td><div class="text">OneLink Shelter</div></td>
    <td><div class="text">7,500</div></td>
    <td>
      <div class="text">
        <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 8 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 8 &act=add'> Add</a><div></td>
  </tr>
  <tr>
    <td><img src="Tent3.jpg" alt="Tent" width="150" height="150"></td>
    <td><div class="text">Kingdom 6 Tent</div></td>
    <td><div class="text">10,500</div></td>
    <td>
      <div class="text">
      <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 9 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 9 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="backbag.jpg" alt="backbag" width="150" height="150"></td>
    <td><div class="text">WASING 55L</div></td>
    <td><div class="text">1,900</div></td>
    <td>
      <div class="text">
      <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 10 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 10 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="backbag2.jpg" alt="backbag" width="150" height="150"></td>
    <td><div class="text">TETON Sports Explorer 4000</div></td>
    <td><div class="text">2,500</div></td>
    <td>
      <div class="text">
        <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 11 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 11 &act=add'> Add</a></div></td>
  </tr>

  <tr>
    <td><img src="backbag3.jpg" alt="backbag" width="150" height="150"></td>
    <td><div class="text">G4Free 50L Outdoor Backpack</div></td>
    <td><div class="text">1,650</div></td>
    <td>
      <div class="text">
      <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 12 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 12 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="outfit.jpg" alt="outfit" width="150" height="150"></td>
    <td><div class="text">MOUNTAIN JACKET</div></td>
    <td><div class="text">16,000</div></td>
    <td>
      <div class="text">
        <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 13 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 13 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="outfit2.jpg" alt="outfit" width="150" height="150"></td>
    <td><div class="text">SNOWFUSE BOOTS</div></td>
    <td><div class="text">2,700</div></td>
    <td>
      <div class="text">
      <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 14 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 14 &act=add'> Add</a></div></td>
  </tr>

  <tr>
    <td><img src="outfit3.jpg" alt="outfit" width="150" height="150"></td>
    <td><div class="text">MOTION PANTS</div></td>
    <td><div class="text">2,950</div></td>
    <td>
      <div class="text">
        <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 15 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 15 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="outfit4.jpg" alt="outfit" width="150" height="150"></td>
    <td><div class="text">SHERPA GAITER</div></td>
    <td><div class="text">900</div></td>
    <td>
      <div class="text">
        <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 16 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 16 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="etc.jpg" alt="etc" width="150" height="150"></td>
    <td><div class="text">Fenix TK20R</div></td>
    <td><div class="text">3,500</div></td>
    <td>
      <div class="text">
      <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 17 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 17 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="etc2.jpg" alt="etc" width="150" height="150"></td>
    <td><div class="text">Pinnacle Dualist Cookset</div></td>
    <td><div class="text">5,800</div></td>
    <td>
      <div class="text">
        <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 18 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 18 &act=add'> Add</a></div></td>
  </tr>
  <tr>
    <td><img src="etc3.jpg" alt="etc" width="150" height="150"></td>
    <td><div class="text">Camp Folding Cot</div></td>
    <td><div class="text">2,300</div></td>
    <td>
      <div class="text">
      <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 19 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 19 &act=add'> Add</a></td>
  </tr>
  <tr>
    <td><img src="etc4.jpg" alt="etc" width="150" height="150"></td>
    <td><div class="text">Flexlite Table</div></td>
    <td><div class="text">3,500</div></td>
    <td>
      <div class="text">
        <?php
      $sql2 = "SELECT quntity FROM stock WHERE stockid = 20 ";
      $query = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_assoc($query);
      echo $row['quntity'];
      ?>
    </div>
    </td>
    <td><div class="text"><a href='insertadd.php? stockid= 20 &act=add'> Add</a></div></td>
  </tr>

</table>
</form>

  </div>
  </div>
  <div class="column side">
    <div class="rightspacead" id="rightspacead" >
      <h2>ADMIN<h2>
  </div>
</div>
</body>
</html>
