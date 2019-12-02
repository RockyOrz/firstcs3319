<?php
include 'connectdb.php'
?>
<?php
$OHIP =$_POST["OHIP"];
$found=False;
$query = 'SELECT * FROM treatments WHERE OHIP="'.$OHIP.'"';
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Result</br>";
   while ($row = mysqli_fetch_assoc($result)) {
   	 if($row["OHIP"] == $OHIP){
	 	echo $row["patient_Fname"]." ".$row["patient_Lname"].", "."doctor: ".$row["doctor_Fname"]." ".$row["doctor_Lname"]."<br>";
		$found=True;	
	 }
   }
   if(!$found){
	echo "no such OHIP.";
   }
mysqli_close($connection);
?>