<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "expweb";
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{

echo "Connected successfully";
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$conpassword = $_POST['conpassword'];

$sql = "INSERT INTO data (name, email, password, conpassword) 
        VALUES ('$name', '$email', '$password', '$conpassword')";

//echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: $sql <br> $conn->error";
}
$conn->close();
?>
