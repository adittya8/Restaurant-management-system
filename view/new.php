<?php
include("head.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <meta charset="utf-8">
    <style>
    .button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: black; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: black; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
</style>
    <title></title>
  </head>
  <body>
<br><br><br><br><br><br><br><br><br><br><br>
<fieldset align = "center">

	        <div class="topnav">
	        	 <div class="button button1">
          <a href ="../view/login_user_view.php">Admin Login</a><br></div><br>
       

   

          <div class="button button2">
          <a href ="../view/login.php">User Login</a></div>



      
      




     
          </div>

     
</fieldset>

  </body>
</html>
   <?php
include("../model/foot.php");
?>