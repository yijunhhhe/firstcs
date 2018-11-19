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
<h1>Your Purchase:</h1>
<ol>
<?php
   $firstname= $_POST["firstname"];
   $lastname = $_POST["lastname"];
   $city =$_POST["city"];
   $phone =$_POST["phone"];
   $agent =$_POST["agent"];

   $query1= 'select max(customerid) as maxid from customers';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
        die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $customerid = (string)$newkey;
   $query = 'INSERT INTO customers VALUES ("' . $customerid . '","' . $firstname . '","' . $lastname . '","' . $city . '","' . $phone . '","' . $agent . '")';
    if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your customer was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
