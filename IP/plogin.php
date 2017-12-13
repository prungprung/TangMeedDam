<html>
<head></head>
<style>
input[type=text] : focus {
    width: 25%
    padding: 120px 20px;
    margin: 8px 0;
    border: 3px solid #555;
    border-radius: 40px;
    box-sizing: border-box;
  }

input[type=password] : focus {
    width: 25%
    padding: 12px 20px;
    margin: 8px 0;
    border: 3px solid #555;
    border-radius: 4px;
    box-sizing: border-box;
  }
  #login{
    color: white;
    margin-top: 5%;
    margin-left: 550px;
  }
  #button{
    margin-bottom: 150px;
    margin-left: 590px;
  }
  #name{
    margin-top: 3%;
    margin-left: 400px;
  }

  body {
    background-image: url("BG.jpg");
  }
</style>
<body>
  <div class="name" id="name">
  <font size=8 color="white">
  <p>Please Login First</p>
</div>

  <div class="login" id ="login">
</font>
  <form method="POST" action="checklogin.php">
    <label for="fname">Username</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="fname">Password&nbsp;</label>
    <input type="password" id="password" name="password"><br><br>
  </div>
    <div class="button" id="button">
    <button type="submit">Login</button>
    <button type="button" onclick="window.location.href='Register.php'">Register</button>
    <button type="button" onclick="window.location.href='Homepage.php'">Home</button>
  </form>
  </div>

</body>
</html>
