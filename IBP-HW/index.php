
<!DOCTYPE html>
<html>
<body>

<h2>Student Registration Form</h2>

<form action="database-insert.php" method="POST">
  <label for="fname">Full Name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="email">E mail</label><br>
  <input type="email" id="email" name="email" value=""><br><br>
    <label> Gender </label><br>
    <input type="radio" id="Male" name="fav_language" value="male">
    <label for="male">Male</label><br>
     <input type="radio" id="Female" name="fav_language" value="female">
     <label for="female">Female</label><br>
  <input type="submit" value="Submit">
</form>


</body>
</html>

