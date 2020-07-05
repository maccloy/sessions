<?php
session_start();

if (session_unset()) {
    echo "Session wiped";
} else {
    echo "Error";
}

?>