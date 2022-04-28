<?php
session_start();
if (!isset($_SESSION["logged"])) {
    die("Not authorized");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <h2>movies list</h2>
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
    ?>
<form action="add_movie_process.php" method="post" enctype="multipart/form-data">
          <label for="movie_name">Movie name</label>
          <input type="movie_name" id="email" name="movie_name">
          <label for="link">link</label>
          <textarea id="password" name="link" rows="7" columns="50"></textarea>
          <input type="submit" id="submit" value="Submit">
        </form>
    <?php

    $sql = "SELECT movie_name, link FROM movies_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["movie_name"]. " <hr>" . $row["link"]."<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
    
    ?>
</body>
</html>