<?php
  
header("Content-Type: application/octet-stream");

$file = $_GET["file"];
$path = 'assets/pdf/' . $file;

if(!empty($path && file_exists($path))){


    header("Cache-Control: public");
    header("Content-Disposition: attachment; filename=" . urlencode($file));   
    header("Content-Type: application/zip");
    header("Content-Description: File Transfer");
    header("Content-Transfer-Encoding: binary");
    readfile("$path");
    echo "exists";
}
?>


