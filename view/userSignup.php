<?php
include("head.php");
?>

<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="../CSS/signup/signupVolunteerCSS2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<meta charset="utf-8">
<style>
        
        .center {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}
</style>
<title>Registration</title>

</head>
<body>
<?php
require('../model/dbconn.php');

if (isset($_REQUEST['username'])){
       
  $username = stripslashes($_REQUEST['username']);
    
  $username = mysqli_real_escape_string($con,$username); 
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($con,$email);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '$password', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='new.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>

<form name="registration" action="" method="post"><div class="center">
          <br><hr>
  <label for="username" style="font-family: Raleway; font-size: 20px; color: #4d0000;"> User Name </label> 
  <input type="text" id="username" name="username" onkeyup="checkUsername(this.value)">
  <span class="error" id="usernameErr"><?php if(!empty($_GET['userNameErr'])){echo $_GET['userNameErr'];}?></span>
  <br><hr>
<label for="email" >Email: </label>
<input type="email" name="email" placeholder="Email" required /><br>
<label for="password" >Password: </label>
<input type="password" name="password" placeholder="Password" required /><br>
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
   <?php
include("../model/foot.php");
?>