<?php
include 'connectdb.php'
?>
<?php
$query = "SELECT hospital_code FROM hospitals";
$result = mysqli_query($connection,$query);
if (!$result) {
   die("databases query failed.");
}
echo "which hospital he/she works at?</br>";
while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="works_in" value="';
        echo $row["hospital_code"];
        echo '">' . $row["hospital_code"] . "<br>";

}
echo '</select>';
mysqli_close($connection);
?>
