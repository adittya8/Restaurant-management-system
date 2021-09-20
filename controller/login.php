
<?php
require_once "../model/db_connect.php";



if(isset($_POST['submit']))
{


  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $username=$password=$err_db="";
  $flag=1;



  if (empty($_POST["username"])) {
    echo "User Name is required";
    $flag=0;
  }
  else {
   $username = test_input($_POST["username"]);

    if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
       echo "Only letters and white space allowed";
       $flag=0;
     }
     else {
       if(strlen($username)<2)
       {
          echo "Name must contains at least two character ";
          $flag=0;
       }

     }
  }


if(!empty($_POST["password"])) 
    {
    $password = test_input($_POST["password"]);
    if (strlen($_POST["password"]) < '8') 
    {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
}
elseif(!empty($_POST["password"])) 
{
    $passwordErr = "Please enter password   ";
} 


if(!empty($_POST['remember'])) {
  setcookie ("username",$_POST["username"],time()+ 10000);
  setcookie ("password",$_POST["password"],time()+ 10000);


} else {
  setcookie("username","");
  setcookie("password","");
}



 if($flag==1){
      if(authenticateUser($username,$password)){
        session_start();
          $_SESSION['username']=$username;
        
        header("location: ../view/dashboard.php");
      }
      $err_db = "Invalid User!";
      echo "Enter correct password and username.";
    }
    else{
       echo "Enter correct password and username.";
       
    }
  }

  else {
  echo "You are not allowed to access this page";
}
  
  function authenticateUser($username,$password){
    $query = "select * from users where username='$username' and password='$password'";
    $rs = get($query);
    if(count($rs)>0){
      return true;
    }
    return false;
  }








?>

