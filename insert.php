<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agri";

$pass=$_POST['password'];
$fname=$_POST['first'];
$lname=$_POST['last'];
$village=$_POST['village'];
$district=$_POST['district'];
$state=$_POST['state'];
$pin=$_POST['pincode'];
$user=$_POST['username'];
$phno=$_POST['phone'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users(username, password,firstname, lastname, village, district, state, pincode, phone) VALUES ('$user','$pass', '$fname', '$lname', '$village', '$district','$state','$pin','$phno')";


if ($conn->query($sql) === TRUE) {
header('Location: index.html');
    
} else {
    echo "0 results".$user;
}
$conn->close();
?>