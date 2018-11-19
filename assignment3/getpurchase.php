
<?php
$query = "SELECT * FROM customers order by lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
echo '<input type = "radio" name = "customers" value ="';
echo $row["customerid"];
echo '"/>';
echo $row["customerid"] ." ". $row["firstname"]." ". $row["lastname"]." ",$row["city"] . " " . $row["phonenumber"] . " " . $row["agentid"];
echo "<br />";
}
mysqli_free_result($result);
?>


