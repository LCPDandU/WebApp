<?php

echo "";

?>

<!-- User Interface -->
<html>
<body>
<h2>LCPD&ADMIN</h2> 

<!-- Login -->
<h2><center>Login</center></h2>
  <form method=post action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table align="center">
    
      <!-- Input username -->  
      <tr>
        <td>LoginID</td>
          <td><input type="text" name="uname"></td>
          <td></td>
	  </tr>
      
      <!-- Input password -->
	  <tr>
        <td>Password</td>
          <td><input type="password" name="pword"></td>
          <td></td>
	  </tr>
	  
      <!-- Buttons for login and forgot password-->
	  <tr>
	    <td colspan=3 align="center">
	      <input type="submit" value="Login" name="submit"/>
	      <input type="submit" value="Forgot Password?" name="reset"/>
	    </td>
      </tr>
	  <tr><td colspan=3 align="center"></td></tr>
	</table>
  </form>

<!-- Create Account -->
<h2><center>Create Account</center></h2> 
  <form method=post action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table align="center">
      
      <!-- Create username -->
      <tr>
        <td>LoginID</td>
          <td><input type="text" name="uname"></td>
          <td></td>
      </tr>
      
      <!-- Create password -->
      <tr>
        <td>Password</td>
          <td><input type="password" name="pword"></td>
          <td></td>
      </tr>
      
      <!-- Create button -->
      <tr>
        <td colspan=3 align="center">
		  <input type="submit" value="Create" name="submit"/>
		</td>
      </tr>
      <tr><td colspan=3 align="center"></td></tr>
    </table>
  </form>
</body>
</html>

