<?php
include 'connectdb.php'
?>
<?php
$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$lnum = $_POST["license_number"];
$ldate = $_POST["licensed_date"];
$spec = $_POST["specialty"];
$hcode = $_POST["works_in"];
$null = 'NULL';

echo $fname;
echo $lname;
echo $lnum;
echo $ldate;
echo $spec;
echo $hcode;
?>
<?php
$query = "SELECT license_number FROM doctors";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   while ($row = mysqli_fetch_assoc($result)) {
        if($lnum == $row["license_number"]){ 
		 header('location:license_number_duplicated.php');
		 break;
	}
	
   }
   mysqli_free_result($result);
?>
<?php
$query = 'INSERT INTO doctors VALUES("'.$fname.'","'.$lname.'","'.$lnum.'","'.$ldate.'","'.$spec.'","'.$hcode.'", NULL, NULL)';
$result = mysqli_query($connection,$query);
if (!$result) {
        die("databases query failed.");
}
echo "insert successs!";
?>