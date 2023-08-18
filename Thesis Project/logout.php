<?php 

session_start();
if($_SESSION['email']){

}else{
	header("Location: index.php");
}
session_destroy();

header("Location: index.php");

?>