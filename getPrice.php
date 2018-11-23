<?php
   $prodID = $_POST["productBox"];
   $query = 'SELECT description, SUM(purchase.quantity) as sum FROM purchase, product WHERE purchase.productID="'.$prodID.'" and product.productID="'.$prodID.'";';
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("databases query failed.");
   }

   $query2 = 'SELECT cost FROM product WHERE productID="' . $prodID . '";';
   $result2 = mysqli_query($connection,$query2);
   if (!$result2) {
      die("databases query failed.");
   }

   $cost = mysqli_fetch_assoc($result2);

   while ($row = mysqli_fetch_assoc($result)) {
     $sales = floatval($cost[cost]) * floatval($row[sum]);
     echo "ProductID: " . $prodID ."<br>";
     echo "Name: " . $row[description] . "<br>";
     echo "Sold: " . $row[sum] . "<br>";
     echo "Sales: $" . $sales . "<br>";
   }
   mysqli_free_result($result);
?>
