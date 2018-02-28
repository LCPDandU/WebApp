<?php

   //this file contains a header of hyper links that will allow the user to navigate to any subsystem from any page
   
   //here we start the session to gain access to global variables
   session_start();
   
   $loginID=$_SESSION['LoginID'];
   $name=$_SESSION['Name'];

   //print header of hyper links on every page
   echo '<div align="left">
         <a href="home.php">Home</a>
         &nbsp;&nbsp;&nbsp;&nbsp;
         <a href="createMenu.php">Add Event/Notification</a>
         &nbsp;&nbsp;&nbsp;&nbsp;
         <a href="searchMenu.php">Search/Edit</a>
         &nbsp;&nbsp;&nbsp;&nbsp;
         <a href="accountManagementMenu.php">Account Management</a>
         &nbsp;&nbsp;&nbsp;&nbsp;
         <!--<a href="accountManagementMenu.php">Logged in as: '.$loginID.' ('.$name.')</a>-->
         Logged in as: '.$loginID.' ('.$name.')
         &nbsp;&nbsp;&nbsp;&nbsp;
         <a href="logout.php">Logout</a>
         &nbsp;&nbsp;&nbsp;&nbsp;
         </div>';

?>