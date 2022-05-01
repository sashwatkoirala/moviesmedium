<?php
  require("db.php");
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
$movie_name=mysqli_real_escape_string($conn,$_POST['movie_name']);
$link=mysqli_real_escape_string($conn,$_POST['link']);
$thumbnail=mysqli_real_escape_string($conn,$_POST['thumbnail']);


    $sql = 'INSERT INTO movies_list(movie_name, link,move_thumbnail, total_views)
VALUES ("'.$movie_name.'", "'.$link.'","'.$thumbnail.'" ,0)';

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
    ?>