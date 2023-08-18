<?php

include("config.php");

$id = $_REQUEST['delete'];

mysqli_query($conn, "DELETE FROM announcement WHERE id='$id'");

echo "<script>alert('Announcement deleted successfully.');"

?>