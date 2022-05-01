<?php

$env="dev";

if ($env == "dev"){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "moviedatabase";

} else if ($env == "pro"){
    $servername = "mysql-moviesmedium.alwaysdata.net";
    $username = "265795";
    $password = "sashwat123";
    $dbname = "moviesmedium_list";
}

    ?>