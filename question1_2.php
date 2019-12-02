//helper php for question1_1

<!DOCTYPE html>
<html>
<h1>doctor info</h1>
<body>
<?php
include 'connectdb.php';
?>
<?php
$doctor = $_POST["doctor"];
$query = "SELECT * FROM doctors WHERE license_number = '$doctor'";
$result = mysqli_query($connection,$query);
if (!$result){
die("databases query failed.");
}
echo "</br>";
while ($row = mysqli_fetch_assoc($result)){
      echo $row["first_name"]." ".$row["last_name"].",  "."license number: ".$row["license_number"].",  ". "licensed date: ".$row["licensed_date"].",  ". "specialty: ".$row["specialty"].",  ". "works at: ".$row["works_in"].",  ". "head of the hospital: ".$row["head_of_hospital"].",  ". "head started date: ".$row["head_started_date"]."<br>";
}
mysqli_free_result($result);
mysqli_close($connection);
?>
</body>
</html>