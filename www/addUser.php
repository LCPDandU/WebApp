<html>
<body>
  <h2>Create Account</h2>
  <form action="addUserSubmit.php" method="post">
  <fieldset>
    <p>
      <label>Name:</label>
      <input type="text" name="Name" value="" />
    </p>
    <p>
      <label>Login ID:</label>
      <input type="text" name="LoginID" value="" maxlength="32" />
    </p>
    <p>
      <label>Password:</label>
      <input type="password" name="Password" value="" maxlength="32" />
    </p>
    <p>
      <input type="submit" value="Create" />
    </p>
  </fieldset>
  </form>  
</body>
</html>