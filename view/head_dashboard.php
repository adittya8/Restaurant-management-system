<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
</style>
    
    <title></title>
  </head>
  <body>
    <fieldset align = "right">
         <h1 align="left"><img src="../CSS/logo.png"><b> Hot Chicken <span style="color:yellow">Cafeteria</span>.com</b></h1>
        <div class="topnav">
          <a href ="../view/dashboard.php">Dashboard</a>
         <p><a href="order.php">Order New Food</a></p>
         <p><a href="view_ordered_foods.php">View Orders</a><p>
      
      <p><a href="logout.php">Logout</a></p>
          </div>

         
     </fieldset>
  </body>
</html>