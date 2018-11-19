<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Customer</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Delete Customer:</h1>
<ol>
<?php
   $customerid = $_POST["customer"];

   $query1 = 'delete from customers where customerid = "' . $customerid . '" ';
    $query2 = 'delete from purchase where customerid= "' . $customerid . '" ';
    if (!mysqli_query($connection, $query1)) {
        die("Error: delete1 failed" . mysqli_error($connection));
    }
    if (!mysqli_query($connection, $query2)) {
        die("Error: delete2 failed" . mysqli_error($connection));
    }
   echo "Your customer was deleted!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
