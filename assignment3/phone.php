<?php
   $query = "SELECT * FROM customers";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "pick a customer </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customer" value="';
        echo $row["customerid"];
        echo '">' . $row["firstname"] . " " . $row["phonenumber"] . "<br>";
   }

   echo 'New phone number <input type="text" name="phone" value=""> </br>';
   
   mysqli_free_result($result);
?>
