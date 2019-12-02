<?php
include 'connectdb.php'
?>
<?php
$query = "SELECT * FROM doctors";
$result = mysqli_query($connection,$query);
if (!$result) {
   die("databases query failed.");
}
echo "</br>";
while ($row = mysqli_fetch_assoc($result)) {
   echo '<input type="radio" name="doctor" value="';
   echo $row["license_number"];
   echo '">' . $row["first_name"] . " " . $row["last_name"] . "<br>";
}
mysqli_free_result($result);
mysqli_close($connection);
?>