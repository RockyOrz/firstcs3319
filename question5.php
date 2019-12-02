<html>
<h1>update a hospital's name</h1>
<?php
include 'connectdb.php'
?>
<?php
$query = "SELECT hospital_code FROM hospitals";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "choose a hospital </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<form action="question5_1.php" method="post">';
        echo '<input type="radio" name="hcode" value="';
        echo $row["hospital_code"];
        echo '">' . $row["hospital_code"] .  "<br>";
   }
   echo '<input type="submit" value="Submit">';
   mysqli_free_result($result);
   mysqli_close($connection);
?>
