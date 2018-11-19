
<?php
   $query = "select description from products where productid not in (select productid from purchase);";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   
   while ($row = mysqli_fetch_assoc($result)) {
    echo $row["description"]. "<br>";
   }

   
   mysqli_free_result($result);
?>
