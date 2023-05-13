<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChatOnline.com/Login</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="head">
      <h1>Welcome to ChatOnline</h1>
    </div>
    <div class="center">
      <h2>LOGIN</h2>
      <?php if(isset($_GET['error'])){ ?>
        <p class="error"> <?php echo $_GET['error'];?></p>
        <?php } ?>
      <form method="POST" action="login2.php">
        <div class="txt">
          <input type="text"  name="Uname" />
          <label>Username</label>
        </div>
        <div class="txt">
          <input type="password" name="password" />
          <label>Password</label>
        </div>
        <div class="forgot">
          <a href="signin.php">Forgot Password?</a>
        </div>
        <input type="submit" value="Login" />
        <div class="signlink">
          Not a member? <a href="signin.php">Sign In</a>
        </div>
      </form>
    </div>
  </body>
</html>
