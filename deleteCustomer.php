<?php
  $cust = $_POST["delBox"];
  $query = 'DELETE FROM customer WHERE customerID ='.$cust.';';
  $result = mysqli_query($connection,$query);

  if(!result){
     die("Database Query Failed");
  }
  header("Location: newcustomer.php");
  mysqli_close($connection);
?>
