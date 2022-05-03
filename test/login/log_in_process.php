<?php
session_start();
   $email = $_POST["email"];
   $password = $_POST["password"];
   if ($email == "sashwatkoirala3@gmail.com" AND $password == "sashwat123"){
       $_SESSION['logged']=true;
       include("dashboard.php");
   } else {
       echo "Username or password wrong";
   
    }

?>