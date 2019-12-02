<html>
<?php
include 'connectdb.php'
?>
<h2>enter a new name</h2>
<body>
<?php
$hcode = $_POST["hcode"];
echo $hcode;
echo '<form action="question5_cname.php" method="post">';
echo '<input type="text" name="new">';
echo '<input type="hidden" name="hcode" value="';
echo $hcode;
echo '">';
echo '<input type="submit" value="Submit">';
echo '</form>';
?>
</body>
</html>
