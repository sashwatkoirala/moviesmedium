<?php 
die
?>
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
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
</head>
<body>
<!-- Shell -->
<div id="shell">
	<!-- Header -->
	<div id="header">
		<h1 id="logo"><a href="index.php">MOVIES MEDIUM</a></h1> 
		

		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a class="active" href="#">HOME</a></li>
			    <li><a href="contact.html">CONTACT</a></li>
			    <li><a href="index2.html">TEAM</a></li>
			    <li><a href="/test/login/log.html">LOGIN</a></li>
				<li><a class="" href="https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm?hl=en">DOWNLOAD ADBLOCK</a></li>
			</ul>
		</div>
		<!-- end Navigation -->
		
		<!-- Sub-menu -->
		<div id="sub-navigation">
			<ul>
			    <p style="font-size: 20px; color: white; padding-top: 10px;"  > The place where money is worth less!</p>
				<form action="index.php" method="get" enctype="multipart/form-data0 "> 
					<input type="text" name="search" style="padding:5px">
					<input type="submit" style= "padding:5px">
</form>
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
if (isset($_GET["search"])) {
	$sql = "SELECT id,movie_name, link, move_thumbnail FROM  movies_list WHERE movie_name LIKE '%".$_GET["search"]."%'"; 
} else {
	$sql = "SELECT id,movie_name, link, move_thumbnail FROM  movies_list";
}
 
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
			<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/626f44d27b967b11798d5f8b/1g21a9m82';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
			
 	</body>
</html>