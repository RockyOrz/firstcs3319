//helper php code for question2
<html>
<h1>Result</h1>
<body>
<?php
include 'connectdb.php'
?>
<?php
$date = $_POST["date"];
$query = "SELECT * FROM doctors WHERE licensed_date < '".$date."'";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo  $row["first_name"]." ".$row["last_name"]." ".$row["specialty"]." ".$row["licensed_date"]."<br>";
   }
   mysqli_free_result($result);
   mysqli_close($connection);
?>
</body>
</html>