<?php
include 'connectdb.php';
?>
<?php
$OHIP=$_POST["OHIP"];
$pfname=$_POST["pfname"];
$plname=$_POST["plname"];
$dlicense=$_POST["dlicense"];
$dfname=$_POST["dfname"];
$dlname=$_POST["dlname"];
$query = 'INSERT INTO treatments values("'.$OHIP.'","'.$pfname.'","'.$plname.'","'.$dlicense.'","'.$dfname.'","'.$dlname.'")';
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("doctor doesn't exists");
   }
   echo "success!";
   mysqli_close($connection);
?>