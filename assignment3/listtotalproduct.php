<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Get Number of Purchase</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Get Number of Purchase:</h1>
<ol>
<?php
   $productid = $_POST["productid"];

      $query1 = 'select purchase.productid, sum(quantity), description, sum(costperitem * quantity) from products, purchase where purchase.productid = "'. $productid .'" and purchase.productid = products.productid group by purchase.productid';
   $result=mysqli_query($connection,$query1);
    if (!$result) {
         die("nobody purchase");
     }
     while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo "ProductId Quantity Description Total Cost <br>";       
 echo $row["productid"]. " " . $row["sum(quantity)"] . " " . $row["description"] ." ". $row["sum(costperitem * quantity)"]."<br>";
     }
   mysqli_free_result($result);
   mysqli_close($connection);
?>
</ol>
</body>
</html>



