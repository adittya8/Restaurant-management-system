<?php
session_start();
if(isset($_SESSION['username']))

  session_destroy();
  header('Location:../view/public_home.php');




 ?>