<?php 
if(!isset($_SESSION["username"]))

session_start()

?>
<?php
include("head_dash.php");
?>


<?php
require('../model/dbconn.php');

?>
<!DOCTYPE html>
<html>
<head>
	    	 <link rel="stylesheet" href="../CSS/login/loginVolunteerCSS2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8">
<title>View Orders</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
 
| <a href="order.php">Order New Food</a> 
|| <a href="dash.php">Dashboard</a> 
<h2>View Foods</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Address</strong></th>


</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from orders ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["quantity"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>

</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>