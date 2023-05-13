<?php 
session_start();
include 'db_con.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $pass = $_POST["pass1"];
  $confirmpass = $_POST["pass2"];
  $duplicate = mysqli_query($connection, "SELECT * FROM users1 WHERE user_name='$Uname' OR password='$password'");
  if(mysqli_num_rows($duplicate) > 0){
    echo "<script>
    alert('Username or Password has already been taken');
    </script> ";
  }else{
    if ($pass == $confirmpass){
      $query = "INSERT INTO users1 VALUES ('',$name','$pass')";
      mysqli_query($connection,$query);
      echo "<script>
      alert('Registration Succesful');
      </script> ";
    } else{
      echo "<script>
      alert('Password doesnt match');
      </script> ";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChatOnline.com/signin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <link rel="stylesheet" href="signin.css" />
  <body>
    <div class="head">
      <h1>ChatOnline</h1>
      <p>New to ChatOnline,signin and start using our online chartbot</p>
    </div>


    <div class="center">
      <h2>Sign In</h2>
      <form method="POST" action="bot.php">
        <div class="txt">
          <input type="text" name="Username" />
          <label>Enter Username</label>
        </div>
        <div class="txt">
          <input type="password" name="pass1" />
          <label>Password</label>
        </div>
        <div class="txt">
          <input type="password"  name="pass2" />
          <label>Confirm Password</label>
        </div>

        <input type="submit" value="signin" name="submit"/>
        <div class="col-sm-3 d d-grid">
                 <a class="btn btn-outline-primary" role="button" href="login.php">Back to login</a>
            </div>
      </form>
    </div>
  </body>
</html>












?>