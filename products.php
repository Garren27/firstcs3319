<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 3 Customers</title>
<link rel="stylesheet" type="text/css" href="museum.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>

<script src="productSelBoxes.js"></script>

<?php
include 'connectdb.php';
?>
<h1>Products</h1>

<form action="index2.php" method="post">
<input type="submit" value="Main Page"><br><br>
</form>

Select description/price and ascending/descending:
<form action="" method="post">
   Type: 
   <select name="typeSelBox" id="typeSelBox">
     <option value='1'>Description</option>
     <option value='2'>Price</option>
   </select>
   <br>

   Order: 
   <select name="orderSelBox" id="orderSelBox">
     <option value='0'>Select Here</option>
     <option value='1'>Ascending</option>
     <option value='2'>Descending</option>
   </select>
</form>

<hr>
<?php
  if ( isset ($_POST["typeSelBox"]) and isset($_POST["orderSelBox"]) ) {
    include 'connectdb.php';
    include 'getproduct.php';
  }
  else{
    echo "Select a type and order";
  }
?>
<hr>
<h2>Products Not Purchased</h2>
<?php
  include "connectdb.php";
  include "notPurchased.php";
?>

<hr>

<?php
   mysqli_close($connection);
?>
</body>
</html>

