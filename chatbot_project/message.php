<?php 
$connection = mysqli_connect("localhost","root","","bot")or die("Database Error") ;

//getting user message through ajax
$getMesg = mysqli_real_escape_string($connection, $_POST['text']);

//checking user to database queries
$check_data = "SELECT replies FROM chatbot1 WHERE queries LIKE '%$getMesg%' ";
$run_querry = mysqli_query($connection, $check_data) or die("error");

//if user querry matched to database querry we'll show the reply otherwise it goes to else statement
if(mysqli_num_rows($run_querry) > 0){
 $fetch_data =mysqli_fetch_assoc($run_querry);
 
 $replay = $fetch_data['replies'];
 echo $replay;
}else {
    echo "Sorry cant, understand you";
}

?>