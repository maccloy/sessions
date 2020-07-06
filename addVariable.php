<?php

session_start();

$name = $_POST["name"];
$data = $_POST["data"];

$_SESSION[$name] = $data;

header("Location: index.php");

?>