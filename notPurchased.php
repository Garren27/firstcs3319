<?php

  $query = 'SELECT description, quantity FROM product WHERE product.productID NOT IN (SELECT productID FROM purchase);';
  $result = mysqli_query($connection, $query);
  if(!result){
     die("Database Query Failed");
  }

  while($row = mysqli_fetch_assoc($result)){
     echo "Name: " . $row["description"]."<br>";
     echo "Quantity: " . $row["quantity"]."<br><br>"; 
  }
  mysqli_free_result($result);
?>
