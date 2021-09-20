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
$query = "SELECT * from food where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	    	 <link rel="stylesheet" href="../CSS/login/loginVolunteerCSS2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dash.php">Dashboard</a> 
| <a href="insert_food.php">Insert New Record</a> 

<h1>Update Foods</h1>
<?php
$status = "";
if(isset($_POST['submit']))
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$stock =$_REQUEST['stock'];
$price =$_REQUEST['price'];
$update="update food set trn_date='".$trn_date."',
name='".$name."', stock='".$stock."' , price='".$price."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Food Updated Successfully. </br></br>
<a href='view.php'>View Updated Food</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 

<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name"  required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="stock" placeholder="Enter stock" required value="<?php echo $row['stock'];?>" /></p>
<p><input type="text" name="price" placeholder="Enter price" required value="<?php echo $row['price'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
   <?php
include("../model/foot.php");
?>