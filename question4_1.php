<html>
<?php
include 'connectdb.php'
?>
<?php
$doctor = $_POST["doctor"];
$jump = True;
$query = "SELECT * FROM treatments";
$result = mysqli_query($connection,$query);
if (!$result) {
   die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
   if($doctor == $row["doctor_license"]){
            echo 'selected doctor has a treatment, are you sure to delete?';
	    echo '<form action="question4_delete.php" method="post">';
	    echo '<input type="radio" name="answer" value= "'.$doctor.'"d>yes';
	    echo '<input type="radio" name="answer" value="no">no';
	    echo '<input type="submit" value="Submit">';
            echo '</form>';
            $jump = False;
	    break;
   }
}
if($jump){
mysqli_free_result($result);
$query = 'DELETE FROM doctors WHERE license_number = "'.$doctor.'"';
$result = mysqli_query($connection,$query);
   	    if (!$result) {
               die("databases query failed.");
    	    }
	    echo "Delete success!";
}
mysqli_free_result($result);
mysqli_close($connection);
?>
</html>
