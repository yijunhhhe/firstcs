<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add Purchase</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your Purchase:</h1>
<ol>
<?php
   $productid= $_POST["productpick"];
   $customerid = $_POST["customerpick"];
   $quantity =$_POST["quantity"];
         $query1= 'select quantity from purchase where productid = "' . $productid . '" and customerid = "' . $customerid . '"';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
        die("database query failed.");
   }
   $row=mysqli_fetch_assoc($result);

   $quantity1 =  $row["quantity"];
   if($row["quantity"] == 0){
       $query = 'INSERT INTO purchase values("' . $customerid . '","' . $productid . '","' . $quantity . '")';
        if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
        }
        echo "Your purchase was added!";
   }else if ($quantity < $quantity1){
       
       die("can't insert. Please insert higher than quantity of $quantity1" );
   }else{
       $updatequery = 'update purchase set quantity = "' . $quantity . '" where productid = "' . $productid . '" and customerid = "' . $customerid . '"';
	if (!mysqli_query($connection, $updatequery)) {
        die("Error: update failed" . mysqli_error($connection));
        }
	echo "Your purchase was updated!";   
} 
   mysqli_close($connection);
?>
</ol>
</body>
</html>
