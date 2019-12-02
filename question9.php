<html>
<h1>Doctors who doesn't treat anyone</h1>
<?php
include 'connectdb.php';
?>
<?php
 $query = "SELECT * FROM doctors LEFT JOIN treatments ON doctors.license_number = treatments.doctor_license WHERE treatments.OHIP IS NULL";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo $row["first_name"]." ".$row["last_name"];
   }
   mysqli_close($connection);
?>
