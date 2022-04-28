<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "moviedatabase";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
$movie_name=mysqli_real_escape_string($conn,$_POST['movie_name']);
$link=mysqli_real_escape_string($conn,$_POST['link']);

    $sql = 'INSERT INTO movies_list(movie_name, link, total_views)
VALUES ("'.$movie_name.'", "'.$link.'", 0)';

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
    ?>