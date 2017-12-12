<?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "csboutdoor";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        mysqli_query($conn, "SET NAMES UTF8");

        if(!$conn){
          die("Connection failed: ".mysqli_connect_error());
        }
        if(isset($_REQUEST['fname'])){
				//connection

				//รับค่า user & password
                  $Username = $_REQUEST['fname'];
                  $Password = $_REQUEST['password'];
                  //echo $Password;
				//query
                  $sql="SELECT * FROM member Where Email='$Username' ";

                  $result = mysqli_query($conn,$sql);
                  //echo mysqli_num_rows($result);

                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["ID"] = $row["ID"];
                      $_SESSION["fname"] = $row["Username"];
                      $_SESSION["email"] =$row["Email"];
                      $uid = $_SESSION["ID"];

                      //$_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
                      //$_SESSION["Userlevel"] = $row["Userlevel"];
                      $sql = " SELECT * FROM shop WHERE user_id ='$uid' ";
                      $result = mysqli_query($conn, $sql);

                      if($Username=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location:admin.php");
                      }else{
                        Header("Location:Homepagelogin.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
                        echo "window.history.back()";
                    echo "</script>";
                  }
        }else{
             Header("Location: Login.php"); //user & password incorrect back to login again

        }
?>
