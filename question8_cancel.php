<?php
include 'connectdb.php';
?>
<?php
$OHIP = $_POST["OHIP"];
$dlicense = $_POST["dlicense"];
$query = 'DELETE FROM treatments WHERE OHIP="'.$OHIP.'" AND doctor_license="'.$dlicense.'"';
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Success!";
   mysqli_close($connection);
?>