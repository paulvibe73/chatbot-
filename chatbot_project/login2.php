<?php 
session_start();
include "db_con.php"; 
if(isset($_POST['Uname']) && isset($_POST['password'])){

  function validate($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $Uname =validate( $_POST['Uname']);
  $password = validate($_POST['password']);

  if (empty($Uname)){
    header("location: login.php?error=User Name is Required");
    exit();
  }elseif(empty($password)){
    header("location: login.php?error=Password is Required");
    exit();
  }else{
    $sql = "SELECT * FROM users1 WHERE user_name='$Uname' AND password='$password' ";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);
      if ($row['user_name'] === $Uname && $row['password'] === $password){
       $_SESSION['user_name'] = $row['user_name'];
       $_SESSION['name'] = $row['name'];
       $_SESSION['id'] = $row['id'];
       header("location: bot.php");
       exit();
      }else{
        header("location: login.php?error=Incorrect User Name or Password");
        exit();
      }
    }else{
      header("location: login.php?error=Incorrect User Name or Password");
      exit();
    }

  }
} else{
  header("location: login.php");
  exit();
}

?>
