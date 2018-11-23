<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 3 Webpage</title>
<link rel="stylesheet" type="text/css" href="museum.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>

<form action="index2.php" method="post">
<input type="submit" value="Main Page"><br><br>
</form>
<?php
  include 'connectdb.php';

  $fName = $_POST["fNameBox"];
  $lName = $_POST["lNameBox"];
  $num = $_POST["numberBox"];
  $city = $_POST["cityBox"];
  $agent = $_POST["agentBox"];

  $query1 = 'SELECT MAX(customerID) as maxid FROM customer';
  $result = mysqli_query($connection,$query1);

  if(!result){
     die("Database Query Failed");
  }

  $row = mysqli_fetch_assoc($result);
  $newKey = intval($row["maxid"])+1;
  $custID = (string)$newKey;

  $query = 'INSERT INTO customer (customerID, firstName, lastName, city, phoneNum, agentID) VALUES ("'.$custID.'","' . $fName . '","' . $lName . '","' . $city . '","' . $num . '","' . $agent .'");'; 
  if(!mysqli_query($connection, $query)){
     die("Error: insert failed" . mysqli_error($connection));
  }

  echo $fName . " " . $lName . " was added";

  mysqli_close($connection);

mysqli_free_result($result);
?><br><br>

<form action="newcustomer.php" method="post">
  <input type="submit" value="Add Another Customer">
</form>


</body>
</html>

