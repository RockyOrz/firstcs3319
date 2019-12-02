//helper php for question1

<!DOCTYPE html>
<html>
<h1>choose a doctor to show more info</h1>
<body>
<?php
include 'connectdb.php';
?>
<form action="question1_2.php" method="post">
<?php
$Name = $_POST["byName"];
$order = $_POST["byOrder"];
$query = "SELECT * FROM doctors ORDER BY ".$Name." ".$order."";
$result = mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}
echo "Result </br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo '<input type="radio" name="doctor" value="';
    echo $row["license_number"];
    echo '">' . $row["first_name"] . " " . $row["last_name"] . "<br>";
}
mysqli_free_result($result);  
mysqli_close($connection);
?>
<input type="submit" value="Submit">
</form> 
</body>
</html>
