<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 3 Webpage</title>
<link rel="stylesheet" type="text/css" href="museum.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>

<script src="prodSelBox.js"></script>

<?php
   include 'connectdb.php';
?>

<h1>Check Page
<form action="index2.php" method="post">
   <input type="submit" value="Main Page">
</form></h1>

<h3>Quantity Checker</h3>
<form action="" method="post">
   Select Quantity:
   <input type="number" min="0" name="quantityBox" id="quantityBox" value="0"><br>
<input type="submit" value="Check Purchases">
</form>

<hr>
<ol>
<?php
   if(isset($_POST["quantityBox"])){
      include 'connectdb.php';
      include 'quantityChecker.php';
   }
?>
</ol>
<hr>

<h3>Profit Checker</h3>
<form action="" method="post">
   Select Product:
   <select name="productBox" id="productBox">
     <option value='0'>Select Here</option>
     <?php
        include 'getProduct.php';
     ?>
   </select>
</form>

<hr>

<?php
   if(isset($_POST["productBox"])){
       include 'connectdb.php';
       include 'getPrice.php';
   }
?>

<hr>

<?php
   mysqli_close($connection);
?>
</body>
</html>
