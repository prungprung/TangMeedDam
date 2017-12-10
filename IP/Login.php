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
  <font size=8 color="pink">
  <p>Welcome to CSB outdoor store</p>
</div>

  <div class="login" id ="login">
</font>
  <form>
    <label for="fname">Username</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="fname">Password&nbsp;</label>
    <input type="password" id="fname" name="fname"><br><br>
  </div>
    <div class="button" id="button">
    <button type="button" onclick="alert('KUY')">Login</button>
    <button type="button" onclick="alert('หน้าโง่')">Register</button>
    <button type="button" onclick="alert('buffalo')">Home</button>
  </form>
  </div>
</body>
</html>
