<?php
   $query = "SELECT * FROM customers ";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "customer pick </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customerpick" value="';
        echo $row["customerid"];
        echo '">'.$row["customerid"]. "<br>";
   }

   $query1 = "SELECT * FROM products ";
   $result1 = mysqli_query($connection,$query1);
   if (!$result1) {
        die("databases query failed.");
    }
   echo "product pick </br>";
   while ($row = mysqli_fetch_assoc($result1)) {
        echo '<input type="radio" name="productpick" value="';
        echo $row["productid"];
        echo '">'.$row["description"]. "<br>";
   }
     echo 'Quantity:  <input type="number" name="quantity" value=""> </br> ';


   

   
   mysqli_free_result($result);
?>
