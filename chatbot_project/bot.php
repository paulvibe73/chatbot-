<?php
session_start();
include "db_con.php"; 
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){

?>


<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChatOnline.com</title>
    <link rel="stylesheet" href="bot.css" />
    <script src="http://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  </head>
  <body>
    <div class="outbtn">
      <a href="logout.php" role="button">Logout</a>
    </div>
    <div class="cont">
      <div class="title">ChatOnline</div>
      <div class="form">
        <div class="bot-inbox inbox">
          <div class="icon">
            <i class="fas fa-user"></i>
          </div>
          <div class="msg-header">
            <p>
              Hello there, how can i help you?
            </p>
          </div>
        </div>
      </div>
      <div class="typing-field">
        <div class="input-data">
          <input
            id="data"
            type="text"
            placeholder="Type Something Here.."
            required
          />
          <button id="send-btn">Send</button>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function () {
        $("#send-btn").on("click", function () {
          $value = $("#data").val();
          $msg =
            '<div class="user-inbox inbox"> <div class="msg-header"><p>' +
            $value +
            "</p> </div></div>";
          $(".form").append($msg);
          $("#data").val("");
          //starting ajax code
          $.ajax({
            url: 'message.php',
            type: 'Post',
            data: 'text='+$value,
            success: function (result) {
               $replay = ' <div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i> </div><div class="msg-header"> <p>'+result+'</p></div> </div>';
               $(".form").append($replay);
            }
          });
        });
      });
    </script>
  </body>
</html>
<?php
 
} else{
  header("location: login.php");
  exit();
}

?>



