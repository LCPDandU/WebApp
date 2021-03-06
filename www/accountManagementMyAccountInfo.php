<?php
include ('header.php');
include('config.php');

/**************************************************************************
 * Output the user's info onto the screen. The name will                  *
 * be the only variable that the user will be able to edit.               *
 * The id will be hidden, name and the account status will be read only. * 
 **************************************************************************/
try
{
  $link = connectDB();
  $sql = "SELECT * FROM User WHERE LoginID ='".$_SESSION['LoginID']."';";
  
  if($result = mysqli_query($link, $sql))
  {
    while($row=mysqli_fetch_assoc($result))
    {
      $id = $row['ID'];
      $name = $row['Name'];
      $loginid = $row['LoginID'];
      $accountStatus = $row['AccountStatus'];
    }//end while
  }//end if
}
catch(exception $e)
{
  $message = 'Unable to proccess request';
}
?>

<html>
  <form action="accountManagementMyAccountInfoSubmit.php" method="post">
  <fieldset>
  
    <h1><strong>Manage My Account Info</strong></h1>
    
    <input type="hidden" name="ID" value="<?php echo $id?>" />
    
    <p>
      <label>Name</label>
      <input name="Name" value="<?php echo $name?>" maxlength="128"/>
      <i>(maximum length of 128 characters)</i>
    </p>
    
    <p>
      <label>LoginID</label>
      <input readonly="readonly" name="LoginID" value="<?php echo $loginid?>"/>
    </p>
   
    <p>
      <label>Account Status</label>
      <input readonly="readonly" name="accountStatus" value="<?php echo $accountStatus?>" />
    </p>
    
    <p>
    <input type="submit" value="Edit Info" />
    </p>
    
  </fieldset>
  </form>

</html>




