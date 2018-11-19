<?php
   $query = "select * from products";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "pick a product </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="productid" value="';
        echo $row["productid"];
        echo '">'.$row["productid"]. " " . $row["description"] . "<br>";
   }
   mysqli_free_result($result);
?>
