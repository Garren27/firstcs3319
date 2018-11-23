<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>New Purchase</title>
<link rel="stylesheet" type="text/css" href="museum.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<script src="purchaseinput.js"></script>
<?php
include 'connectdb.php';
?>

<h2> Add a new purchase:</h2>

<form action="index2.php" method="post">
<input type="submit" value="Main Page"><br><br>
</form>


<form action="" method="post">
   For which customer: 
   <select name="customerSelBox" id="customerSelBox">
      <?php
         include "getcustomer.php"
      ?>
   </select><br><br>

   Which product: 
   <select name="productSelBox" id="productSelBox">
      <?php
         include "getproductlist.php"
      ?>
   </select><br><br>

   Quantity:  <input type="number" min="0" name="quantityBox" id="quantityBox" value="0"><br><br>
   If product already purchased, quantity added to current purchased amount
   <br>

<input type="submit" value="Add New Purchase">
</form>

<hr>
<?php
   if(isset($_POST["customerSelBox"]) and isset($_POST["productSelBox"]) and isset($_POST["quantityBox"]) ){
     include "connectdb.php";
     include "addPurchase.php";
   }
?>
<hr>

<?php
mysqli_close($connection);
?>
</body>
</html>
