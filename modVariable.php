<?php
session_start();

$key = $_POST["key"];
$data = $_POST["data"];

$_SESSION[$key] = $data;

header("Location: index.php");

?>