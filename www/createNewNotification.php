<?php

include("config.php");
include("header.php");

//check that all of the fields are populated correctly

//check that inputs are of valid lengths?

//set variables
//use filter_var to remove special characters from input
$NotificationTitle = filter_var($_POST['NotificationTitle'], FILTER_SANITIZE_STRING);
$NotificationDescription = filter_var($_POST['NotificationDescription'], FILTER_SANITIZE_STRING);
$PostDate = $_POST['PostDate'];

$PostTimeHour = filter_var($_POST['PostTimeHour'], FILTER_SANITIZE_STRING);
$PostTimeMinute = filter_var($_POST['PostTimeMinute'], FILTER_SANITIZE_STRING);
$PostTime = $PostTimeHour.":".$PostTimeMinute;

$PostTimeAMPM = $_POST['PostTimeAMPM'];

try
{
   //Connect to CRUD Database  mysqli(Server,User,Password,Database) 
   $link = connectDB();

   $sql = "INSERT INTO Notification VALUES (null,'".$NotificationTitle."','".$NotificationDescription."','".$PostDate."','".$PostTime."','".$PostTimeAMPM."')";
   if (mysqli_query($link, $sql)) 
   {
      $message = 'New Notification added';
   } 
   else
   {
      echo  "<br>Error: " . $sql . "<br>" . mysqli_error($link);
   }
}
catch(Exception $e)
{
   $message = 'Unable to process request';
}

?>

<html>
   
   <p>
      <?php echo $message;?>
      <form action="createMenu.php" method="post"><input type="submit" value="Return"/></form>
   </p>
   
</html>