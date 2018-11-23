<?php
   $whichType = $_POST["typeSelBox"];
   $whichOrder = $_POST["orderSelBox"];

   if($whichType == '1'){
      echo "Ordered by: Description and ";
      $whichType = "description";
   }
   else{
      echo "Ordered by: Price and ";
      $whichType = "cost";
   }

   if($whichOrder == '1'){
      echo "Ascending";
      $whichOrder = $whichType;
   }
   else{
      echo "Descending";
      $whichOrder = $whichType ." DESC";
   }

   $query = "SELECT * FROM product ORDER BY " . $whichOrder;
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("databases query failed.");
   }
   echo "<ol>";
   while ($row = mysqli_fetch_assoc($result)) {
      echo "<li>";
      echo "Description: " . $row["description"] . "<br>";
      echo "  Cost: " . $row["cost"];
   }
   mysqli_free_result($result);
   echo "</ol>";
?>

