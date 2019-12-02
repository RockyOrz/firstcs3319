//question3 php code
<html>
<body>
<h1>Add a new doctor</h1>
<form action="question3_1.php" method="post">
<input type="text" name="first_name">first name<br>
<input type="text" name="last_name">last name<br>
<input type="text" name="license_number">license number<br>
<input type="text" name="licensed_date">licensed date<br>
<input type="text" name="specialty">specialty<br>
</br>
<?php
include 'question3_works_in.php'
?>
<br>
<input type="submit" value="Submit">
</br>
</form>
</body>
</html>