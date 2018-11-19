<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Get Customer</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Get Customer:</h1>
<ol>
<?php
   $number = $_POST["number"];

   $query1 = 'select firstname,lastname,description, quantity  from customers,products,purchase where ' . $number . ' < quantity and customers.customerid = purchase.customerid and products.productid = purchase.productid';
   $result=mysqli_query($connection,$query1);
    if (!$result) {
         die("none");
     }
     while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["firstname"]. " " . $row["lastname"] . " " . $row["description"] ." ". $row["quantity"]."<br>";
     }
   mysqli_free_result($result);
   mysqli_close($connection);
?>
</ol>
</body>
</html>


