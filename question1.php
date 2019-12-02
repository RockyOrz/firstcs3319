//question1 php code

<!DOCTYPE html>
<html>
<head>
<title>Asn3</title>
</head>
<body>
<h1>List all doctor</h1>
<form action="question1_1.php" method="post">
<p>By order of</p>
  <input type="radio" name="byName" value="last_name"> lastName<br>
  <input type="radio" name="byName" value="first_name"> firstName<br> 
  <input type="radio" name="byOrder" value="DESC"> descending<br>
  <input type="radio" name="byOrder" value="ASC"> ascending<br>  

  <input type="submit" value="Submit">
</form>

</body>
</html>
