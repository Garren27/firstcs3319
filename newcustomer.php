<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 3 Customers</title>
<link rel="stylesheet" type="text/css" href="museum.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Customer Management</h1>

<form action="index2.php" method="post">
<input type="submit" value="Main Page"><br><br>
</form>

<h3>Add New Customer</h3>
<form action="addCustomer.php" method="post">
   First Name: <input type="text" name="fNameBox" id="fNameBox" required><br>
   Last Name: <input type="text" name="lNameBox" id="lNameBox" required><br>
   Phone Number: <input type="text" placeholder="123-5678" name="numberBox" id="numberBox" maxlength="8" required><br>
   City: <input type="text" name="cityBox" id="cityBox" placeholder="City" required><br>
   AgentID: <input type="text" name="agentBox" id="agentBox" pattern=".{2,}" maxlength="2" placeholder="xx" required><br>
   <input type="submit" value="Add New Customer">
</form>

<h3>Delete Customer</h3>
<form action="newcustomer.php" method="post">
   <select name="delBox" id="delBox">
     <option value='0'>Select Here</option>
       <?php
         include "getcustomer.php";
       ?>
   </select>

   <input type="submit" value="Delete Selected Customer">
</form>
<hr>
<?php
   if(isset($_POST["delBox"]) and $_POST["delBox"] !== '0'){
      include 'connectdb.php';
      include 'deleteCustomer.php';
   }
   else{
      echo "Select Customer to Delete";
   }
?>
<hr>

<h3>Update Phone Number</h3>
<form action="" method="post">
   Customer To Update: 
   <select name="numBox" id="numBox">
     <option value='0'>Select Here </option>
       <?php
         include "getnumbers.php";
       ?>
   </select><br>
   New Phone Number: <input type="text" name="newNum" id="newNum" maxlength="8" placeholder="123-4567" required>
   <input type="submit" value="Update Selected Phone Number">
</form>

<hr>
<?php
   if(isset($_POST["numBox"]) and $_POST["numBox"] !== '0'){
      include 'connectdb.php';
      include 'updateNum.php';
   }
   else{
      echo "Select Phone Number to Update";
   }
?>
<hr>

<?php
   mysqli_close($connection);
?>
</body>
</html>

