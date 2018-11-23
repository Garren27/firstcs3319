<?php
   $cust = $_POST["numBox"];
   $newNum = $_POST["newNum"];

   $query = 'UPDATE customer SET phoneNum = "' . $newNum . '" WHERE customerID = "'.$cust.'";';
   $result = mysqli_query($connection,$query);
   if(!result){
      die("Database Update Failed");
   }

   header("Location: newcustomer.php"); 
   mysqli_close($connection);
?>
