<?php
include 'connectdb.php'
?>
<?php
$new = $_POST['new'];
$hcode = $_POST['hcode'];
echo $hcode;
echo $new;
$query = 'UPDATE hospitals SET hospital_name = "'.$new.'" WHERE hospital_code ="'.$hcode.'"';
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Success!";
mysqli_close($connection);
?>