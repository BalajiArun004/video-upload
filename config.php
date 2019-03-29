<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agri";
$user=$_POST['username'];
$pass=$_POST['password'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users where username='$user' and password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$fname=$row["firstname"];
$lname=$row["lastname"];
setcookie("firstname",$fname, time() + (86400 * 30), "/");
setcookie("lastname",$lname, time() + (86400 * 30), "/");
header('Location: video_upload.html');
    
} else {
    echo "0 results";
}
$conn->close();
?>