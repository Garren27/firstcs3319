<?php
   $whichCust = $_POST["customerSelBox"];
   $whichProd = $_POST["productSelBox"];
   $howMuch = $_POST["quantityBox"];

   //Gets the previous purchase from the database, if they exist
   $query1 = 'SELECT * FROM purchase WHERE customerID = '.$whichCust.' and productID = '.$whichProd . ";";
   $result = mysqli_query($connection,$query1);

   if (!$result) {
      die("databases query failed.");
   }

   //If there are no purchases, perform an insert
   if (mysqli_num_rows($result)==0){
      echo "Adding purchase information to database..." ."<br>"; 

      $insertQuery = 'INSERT INTO purchase (customerID, productID, quantity) VALUES ('.$whichCust.',' .$whichProd. ',' .$howMuch .');';
      if (!mysqli_query($connection,$insertQuery)){
         die("Error while trying to add new purchase ". mysqli_error($connection));
      }
      else{
         echo "Purchase info added successfully";
         mysqli_free_result($result);
         //header('Location: customers.php');
         //exit;
      }
   }
   //Need to do an update of the existing row if the purchase exists
   else{
      $row = mysqli_fetch_assoc($result);
      $howMuch = $howMuch + $row['quantity'];
      echo "Customer has already made a purchase of that item, adding quantity to that total..." . "<br>";
      $updateQuery = 'UPDATE purchase SET quantity = ' . $howMuch . ";";
      if (!mysqli_query($connection,$updateQuery)){
         die("Error while trying to update purchase". mysqli_error($connection));
      }
      else{
         echo "Purchase info updated successfully";
         mysqli_free_result($result);
         //header('Location: customers.php');
         //exit;
      }
   }
?>
