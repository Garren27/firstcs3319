<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 3 Customers</title>
<link rel="stylesheet" type="text/css" href="museum.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<script src="custSelBox.js"></script>
<?php
include 'connectdb.php';
?>
<h1>Customer List:</h1>

<form action="index2.php" method="post">
<input type="submit" value="Main Page"><br><br>
</form>


Select a customer to view purchases: 
<form action="" method="post">
   <select name="custSelBox" id="custSelBox">
     <option value='0'">Select Here</option>
       <?php
         include "getcustomer.php";
       ?>
   </select>
</form>


<hr>
<?php
  if(isset($_POST["custSelBox"])){
    include "connectdb.php";
    include "getPurchases.php";
  }
?>
<hr>
<ol>
<?php
   $query = 'SELECT * FROM customer ORDER BY lastName';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }

    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo 'First Name: '.$row[firstName] . "<br>"; 
        echo "Last Name: " . $row[lastName] . "<br>";
        echo 'Phone Number: ' . $row[phoneNum] . "<br>";
        echo "City: " . $row[city] . "<br>";
        echo 'AgentID: ' . $row[agentID] . "<br>";
        echo "CustomerID: " . $row[customerID] . "<br>";
        echo "<br></br>";
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
