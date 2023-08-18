<?php

$conn = mysqli_connect("localhost", "root", "root", "thesis_archive", "3307");

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>