<?php

error_reporting(1);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

extract($_POST);

$target_dir = "test_upload/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if($upd)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


$video_path=$_FILES['fileToUpload']['name'];

$sql = "INSERT INTO video(video_name) VALUES ('$video_path')";
$result = $conn->query($sql);

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);

echo "uploaded ". $video_path;



}

//display all uploaded video

if($disp)

{

$sql = "SELECT * FROM video";
$result = $conn->query($sql);

while($all_video=$result->fetch_assoc())
 
{
?>

<video width="400" height="500" controls >
<source src="test_upload/<?php echo $all_video["video_name"]; ?>" type="video/mp4">
</video> 

<?php } } ?>