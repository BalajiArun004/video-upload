//create a database demo
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
CREATE DATABASE `demo`;
USE demo;

//create a table textarea
CREATE TABLE `video`
 (
`v_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`video_name` varchar(255) not null 
)