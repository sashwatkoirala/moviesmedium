<?php
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <h1 style="font-family: 'Shadows Into Light', cursive;">Dashboard</h1>
    <h2 style="font-family: 'Permanent Marker', cursive;">movies list</h2>
    <?php
require("db.php");

    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    ?>
    <div class="form">
    <form action="add_movie_process.php" method="post" enctype="multipart/form-data0 ">
          <label for="movie_name">Movie name</label>
          <input type="text" id="email" name="movie_name" class="form-control md3+" placeholder="Username" aria-label="Movie name"><br>
          <label for="link">link</label>
          <textarea id="password" class="md-textarea form-control" rows="7" column= "50" name="link"></textarea>
          <label for="thumbnail">Thumbnail link</label>
          <input type="text" id="email" name="thumbnail" class="form-control md3+" placeholder="thumbnail_link" aria-label="thumbnail_link"><br>
          <input type="submit" id="submit" value="Submit" class="btn btn-success">
        </form>
    </div>

    <?php

   $sql = "SELECT movie_name,move_thumbnail link FROM movies_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["movie_name"]. " <hr>" . $row["move_thumbnail"]."<br><br>";
  } 
} else {
  echo "0 results";
}
$conn->close();
    
    ?>
</body>

<style>
  .sex {
    padding-top:10px;
  }
</style>

</html>