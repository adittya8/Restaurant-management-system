<?php 
if(!isset($_SESSION["username"]))

session_start()

?>
<?php
include("head_dash.php");
?>


<?php
require('../model/dbconn.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM food WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
header("Location: view.php"); 
?>

   <?php
include("../model/foot.php");
?>