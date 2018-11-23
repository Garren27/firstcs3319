<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 3 Webpage</title>
<link rel="stylesheet" type="text/css" href="museum.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to the Assignment 3 Homepage</h1>

<h3>Current Customers
<form action="customers.php" method="post">
<input type="submit" value="Get Customer Info">
</form>
</h3>

<h3>Product Management
<form action="products.php" method="post">
<input type="submit" value="Go to Product Management">
</form></h3>

<h3>Make New Purchase
<form action="purchasepage.php" method="post">
<input type="submit" value="Make Purchase">
</form></h3>

<h3>Customer Management
<form action="newcustomer.php" method="post">
<input type="submit" value="Go to Customer Management">
</form></h3>

<h3>Quantity Checker
<form action="quantitycheck.php" method="post">
<input type="submit" value="Go to Quantity Checker">
</form></h3>

<?php
mysqli_close($connection);
?>
</body>
</html>
