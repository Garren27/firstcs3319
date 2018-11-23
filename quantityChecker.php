<?php
   $quantity = $_POST["quantityBox"];
   $query = 'SELECT firstName, lastName, purchase.customerID, purchase.quantity, description FROM customer, purchase, product WHERE purchase.quantity >"'.$quantity.'" and purchase.productID = product.productID and purchase.customerID = customer.customerID;';
   $result = mysqli_query($connection,$query);

   if(!result){
      die("Database Query Failed");
   }
   
   if (mysqli_num_rows($result)==0){
      echo "No one has purchased more than that quantity";
   }
   else{
      while($row=mysqli_fetch_assoc($result)){
         echo '<li>';
         echo 'Name: ' .$row[firstName]. " ".$row[lastName]."<br>";
         echo 'Description: ' .$row[description].'<br>';
         echo 'Quantity: ' .$row[quantity].'<br><br>';
      }
   }
   mysqli_free_result($result);
?>
