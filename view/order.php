<?php 
if(!isset($_SESSION["username"]))

session_start()

?>
<?php
include("head_dashboard.php");
?>
<?php
include("view_menu.php");
?>


<?php
require('../model/dbconn.php');


$status = "";
if(isset($_POST['new']) && $_POST['new']==1){

    $name =$_REQUEST['name'];
    $quantity = $_REQUEST['quantity'];
    $address = $_REQUEST['address'];

        $ins_query="insert into orders
    (`name`,`quantity`,`address`)values
    ('$name','$quantity','$address')";
    mysqli_query($con,$ins_query)
    or die(mysql_error($con));
    $status = "New Order Inserted Successfully.
    </br></br><a href='view_orders.php'>View Inserted Orders</a>";
}
?>


<!DOCTYPE html>
<html>
<head>
             <link rel="stylesheet" href="../CSS/login/loginVolunteerCSS2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8">
<title>Insert New Order</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">



<div>
<h1>Insert New Order</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Food Name" required /></p>
<p><input type="text" name="quantity" placeholder="Enter quantity" required /></p>
<p><input type="text" name="address" placeholder="Enter address" required /></p>
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