<?php 
   echo 'Firstname: <input type="text" name="firstname" value=""> </br>';
   echo 'Lastname: <input type="text" name="lastname" value=""> </br>';
   echo 'City: <input type="text" name="city" value=""> </br>';
   echo 'Phonenumber: <input type="text" name="phone" value=""> </br>';

   $query = "SELECT * FROM agents ";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "pick a agent </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="agent" value="';
        echo $row["agentid"];
	echo '">'.$row["firstname"]. " ". $row["lastname"].  "<br>";
   }

?>
