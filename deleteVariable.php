<?php
session_start();

$key = $_POST["key"];

unset($_SESSION[$key]);
header("Location: index.php");

?>