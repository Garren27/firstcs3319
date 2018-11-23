<?php
$query = "SELECT * FROM customer";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
     echo "<option value='";
     echo $row[customerID] . "'>";
     echo $row["firstName"]." ".$row["lastName"]." ID: ".$row["customerID"];
     echo '</option>';
}
mysqli_free_result($result);
?>
