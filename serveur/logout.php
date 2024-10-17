<?php
include "../includes/connectionBdd.php";

/////////////////////////


session_start();

$_SESSION = array();

session_destroy();

header("Location: http://localhost/debutsdelafin/connectionForm.php");
exit();

?>