<?php 
if(!isset($_SESSION["username"]))

session_start()

?>
<?php
include("head_dash.php");
?>


<?php
require('../model/dbconn.php');


$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $name =$_REQUEST['name'];
    $stock = $_REQUEST['stock'];
    $price = $_REQUEST['price'];

    $ins_query="insert into food
    (`trn_date`,`name`,`stock`,`price`)values
    ('$trn_date','$name','$stock','$price')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
             <link rel="stylesheet" href="../CSS/login/loginVolunteerCSS2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dash.php">Dashboard</a> 
| <a href="view.php">View Foods</a> 

<div>
<h1>Insert New Food</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="stock" placeholder="Enter stock" required /></p>
<p><input type="text" name="price" placeholder="Enter price" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
   <?php
include("../model/foot.php");
?>