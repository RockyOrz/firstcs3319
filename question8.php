<html>
<?php
include 'connectdb.php';
?>
<h2>patients list</h2>
<?php
$query = "SELECT * FROM treatments";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo $row["OHIP"]." ".$row["patient_Fname"]." ".$row["patient_Lname"]."<br>";
   }
   mysqli_free_result($result);
   mysqli_close($connection);
?>
<h2>treatments assignment</h2>
<body>
<form action="question8_assign.php" method="post">
patient OHIP:<input type="text" name="OHIP">
patient first name:<input type="text" name="pfname">
patient last name:<input type="text" name="plname">
doctor license:<input type="text" name="dlicense">
doctor first name:<input type="text" name="dfname">
doctor last name:<input type="text" name="dlname">
<input type="submit" value="Submit">
</form>
</body>
<h2>treatments cancellation</h2>
<body>
</br>
<form action="question8_cancel.php" method="post">
OHIP:<input type="text" name="OHIP"><br>
Doctor license:<input type="text" name="dlicense"><br>
<input type="submit" value="Submit">
</form>
</body>
</html>
