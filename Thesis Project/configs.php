<?php
$connection = new mysqli("localhost","root","root","thesis_archive","3307");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}