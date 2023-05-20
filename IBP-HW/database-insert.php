<?php
$servername = "localhost";
$username = "root";
$password = "DKFEDT8MG4";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$fname=$_POST['fname'];
$email=$_POST['email'];
$gender=$_POST['fav_language'];
$sql = "INSERT INTO student (full_name, email, gender)
VALUES ('$fname','$email','$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>