<?php 

require_once "core/bootstrap.php";

$user->logoutUser();

header("location: login.php");

?>