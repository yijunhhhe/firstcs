
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic-Your Pets</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your purchase:</h1>
<ol> 
    <?php
    $which = $_POST["customers"]; 
$query = 'select customers.customerid, firstname, description from products, customers, purchase where  customers.customerid = "' . $which . '" and customers.customerid = purchase.customerid and purchase.productid = products.productid';
    $result = mysqli_query($connection,$query);
    if (!$result) {
        die("databases query failed.");
    }
    while ($row = mysqli_fetch_assoc($result)) {
	echo '<li>';
        echo $row["customerid"] . " " . $row["firstname"] . " " .  $row["description"];        
    }
    mysqli_free_result($result);
    ?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
