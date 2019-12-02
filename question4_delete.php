<?php
include 'connectdb.php';
?>
<?php
$answer = $_POST["answer"];
if($answer != 'no'){
   $query = 'DELETE FROM treatments WHERE doctor_license = "'.$answer.'"';
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("1databases query failed.");
   }
   $query = 'DELETE FROM doctors WHERE license_number = "'.$answer.'"';
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("2databases query failed.");
   }
   echo "delete success!";
}else{
  echo "operation canceled.";
}
mysqli_close($connection);
?>



