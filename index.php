<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Movie medium</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>
	<link rel="stylesheet" href="./modal window/modal.css"> 
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!-- Shell -->
<div id="shell">
	<!-- Header -->
	<div id="header">
		<h1 id="logo"><a href="#">Movies Medium</a></h1>
		

		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a class="active" href="#">HOME</a></li>
			    <li><a href="contact.html">CONTACT</a></li>
			    <li><a href="index2.html">Our team</a></li>
			    <li><a href="about.html">ABOUT</a></li>
			    <li><a href="/test/login/log.html">Log in</a></li>
			</ul>
		</div>
		<!-- end Navigation -->
		
		<!-- Sub-menu -->
		<div id="sub-navigation">
			<ul>
			    <p style="font-size: 20px; color: white; padding-top: 10px;"  > The place where money is worth less!</p>
			</ul>
			<div id="search">
				
			</div>
		</div>
		<!-- end Sub-Menu -->
		
	</div>
	<!-- end Header -->
	
	<!-- Main -->
	<div id="main">
		<!-- Content -->
		<div id="content">

			<!-- Box -->
			<div class="box">
				<div class="head">
					
				</div>
<?php
require("test/login/db.php");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 $sql = "SELECT id,movie_name, link, move_thumbnail FROM  movies_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  ?>
	<a href="watch_movie.php?secno=<?php echo $row["id"]; ?>">
		<div class="movie">
						
			<div class="movie-image">
				<span class="play"><span class="name"><?php echo $row["movie_name"]; ?></span></span>
				<img src="<?php echo $row["move_thumbnail"]; ?>" alt="movie" />
			</div>
			
			
		</div>
	</a>

    <?php
  } 
} else {
  echo "0 results";
}
$conn->close();
?>
				<!-- Movie -->
				
				<!-- end Movie -->
				
				
				<!-- end Movie -->
			</div>
			<!-- end Box -->
			
			
 	</body>
</html>