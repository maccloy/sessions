<?php
session_start();
$sessionId = session_id();
?>

Session ID <?= $sessionId ?><br>

<?php
foreach ($_SESSION as $key => $value) {
    echo "$key = $value change delete <br>";
}

?>
<form method="post" action="addVariable.php">
add var form here <br>
variable name <br>
<input type="text" name="name"><br>
variable data <br>
<input type="text" name="data"><br>
<input type="submit"><input type="reset">
</form>
<br>
<a href="resetSession.php">Reset session</a>