<html>
<h1>Hospitals' info</h1>
<body>
<?php
include 'connectdb.php'
?>
<?php
$query = "SELECT * FROM hospitals INNER JOIN doctors WHERE head_of_hospital IS NOT NULL ORDER BY hospital_name";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   while ($row = mysqli_fetch_assoc($result)) {
       echo "hospital's name: ".$row["hospital_name"].",  "."head doctor: ".$row["first_name"]." ".$row["last_name"].",  "."doctor's start date as head:  ".$row["head_started_date"]."<br>";

   }
   mysqli_free_result($result);
   mysqli_close($connection);
?>
