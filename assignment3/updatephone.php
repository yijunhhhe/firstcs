<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Phone</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Your New Phone:</h1>
<ol>
<?php
   $phone= $_POST["phone"];
   $customerid = $_POST["customer"];

   $query1= 'update customers set phonenumber= "' . $phone . '" where customerid="' . $customerid . '"';

    if (!mysqli_query($connection, $query1)) {
        die("Error: update failed" . mysqli_error($connection));
    }
   echo "Your phone was updated!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
