<!DOCTYPE html>
<html>
<head>
      	<title>Assign3</title>
        <link rel="stylesheet" type="text/css" href="museum.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="styleshe$">
</head>
<body>
<?php
 include 'connectdb.php';
?>
<script src="getproducts.js"></script>
<h1>Assignment2</h1>
<form action="getpurchaseinfo.php" method="post">
<?php
 include "getpurchase.php";

 ?>
<input type="submit" value="Get">
</form>
<br />

<h2>pick your order for products based on description</h2>
<form action="" method="post">
<select name = "order" id = "order">
  <option value="1">select here</option>
  <option value="asc">asc</option>
  <option value="desc">desc</option>
</select>
<br />
</form>
<?php
 if (isset($_POST['order'])) {
 include "connectdb.php";
 include "getproducts.php";
 } //end of if
?>



<h2>purchase products</h2>
<form action="addnewpurchase.php" method="post">
<?php
 include "purchasepick.php";
?>
<input type="submit" value="Add New Purchase">
</form>

<h2>Insert a customer</h2>
<form action="addnewcustomer.php" method="post">
<?php
 include "newcustomer.php";
?>
<input type="submit" value="Add New Purchase">
</form>

<h2>Update a phone number</h2>
<form action="updatephone.php" method="post">
<?php
 include "phone.php";
?>
<input type="submit" value="Update Phone">
</form>

<h2>Delete a Customer</h2>
<form action="deletecustomer.php" method="post">
<?php
 include "customer.php";
?>
<input type="submit" value="Delete Customers">
</form>

<h2>List all the customer names who bought more than a given quantity of any product</h2>
<form action="listcustomer.php" method="post">
<input type="number" name="number" value="">
<input type="submit" value="Get Customers">
</form>

<h2>List the description of any product that has never been purchased</h2>
<?php
  include "listproduct.php";
?>

<h2>List total number of purchases for a particular product</h2>
<form action="listtotalproduct.php" method="post">
<?php
 include "totalproduct.php";
?>
<input type="submit" value="List Product">
</form>

<?php
mysqli_close($connection);
?>
<hr>
</body>
</html>



