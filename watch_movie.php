<?php
$movie_id = $_GET["secno"];
require("test/login/db.php");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 $sql = "SELECT movie_name, link, move_thumbnail FROM  movies_list WHERE id=$movie_id";

 $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo $row["link"];
  }
}

?>