<?php
  $whichCust = $_POST["custSelBox"];
  $purchasequery = "SELECT quantity, productID FROM purchase WHERE customerID = " . $whichCust . ";";
  $result = mysqli_query($connection, $purchasequery);
  if(!$result){
     die("databases query on purchases failed.");
  }
  $customerquery = "SELECT firstName, lastName FROM customer WHERE customerID = " .$whichCust.";";
  $customerresult = mysqli_query($connection, $customerquery);
  $customerrow = mysqli_fetch_assoc($customerresult);
  if (mysqli_num_rows($result)==0){
    echo $customerrow["firstName"] . " " . $customerrow["lastName"] . " has not made any purchases";
  }
  else{
     echo "<ul>";

     echo $customerrow["firstName"] . " " . $customerrow["lastName"] . " purchases:";
     while($row = mysqli_fetch_assoc($result)){   
        $descrquery = "SELECT description FROM product WHERE productID = " . $row["productID"].";";
        $descrresult = mysqli_query($connection, $descrquery);
        $descrrow = mysqli_fetch_assoc($descrresult);
        echo "<li>" . $row["quantity"] . " " . $descrrow["description"]."</li>";
     }
     echo "</ul>";

  }
  mysqli_free_result($result);
  mysqli_free_result($customerresult);
  //mysqli_free_result($descrresult);
?>
