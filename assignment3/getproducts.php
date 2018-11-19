<?php
$order = $_POST["order"];
$query = 'SELECT * FROM products order by description ' . $order . '';
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {

echo $row["productid"] ." ". $row["description"]." ". $row["costperitem"]." ".$row["numberofitems"];
echo "<br />";
}
mysqli_free_result($result);
?>

