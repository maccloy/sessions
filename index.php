<?php
session_start();
$sessionId = session_id();
$sessionVars = "";

foreach ($_SESSION as $key => $value) {
    $sessionVars .= "$key = $value";
    
    $sessionVars .= "<form method='post' action='showVariable.php' class='noWrap'>\n";
    $sessionVars .= "<input type='hidden' value='$key' name='key'>\n";
    $sessionVars .= "<input type='submit' class='button btn btn-warning' value='Change'>\n";
    $sessionVars .= "</form>\n";
    
    $sessionVars .= "<form method='post' action='deleteVariable.php' class='noWrap'>\n";
    $sessionVars .= "<input type='hidden' value='$key' name='key'>\n";
    $sessionVars .= "<input type='submit' class='button btn btn-danger' value='Delete'>\n";
    $sessionVars .= "</form>\n";
    $sessionVars .= "\n";
    $sessionVars .= "<br>";
}

if (strlen($sessionVars) == 0) {
    $sessionVars = "No session variables <br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Basic Sessions</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>

.noWrap {
    display: inline;
}

.form-control {
    width: 300px;
}

.button {
    width: 100px;
}

.btn-session {
    width: 200px;
}

.centered {
    margin-left: auto !important;
    margin-right: auto !important;
    text-align: center;
}
</style>
</head>
<body class="bg-light">
<div class="centered" style="">
<br><br>
    <h2>Session ID</h2>
    <?= $sessionId ?> <br>
    <a href="showSession.php">change session id</a><br><br>
    <h2>Session variables</h2>
     <?= $sessionVars ?>
     <br>
    <h2>Add a new session variable</h2>
    <form method="post" action="addVariable.php">

        <div class="form-group">
            <label for="name" class="centered">Variable Name</label>
            <input type="text" id="name" name="name" class="form-control centered">
        </div>

        <div class="form-group ">
            <label for="data" class="centered">Variable Data</label>
            <input type="text" id="data" name="data" class="form-control centered">
        </div>

        <div class="form-group centered" style="">
            <input type="submit" class="button btn btn-primary" value="Add">
            <input type="reset" class="button btn btn-danger">
        </div>

    </form>
    <br>
    <div class="form-group centered" style="text-align: center;">

    <a href="resetSession.php"><button class="button btn btn-danger btn-session">Reset session</button></a>
    <small id="resetSessionlHelp" class="form-text text-muted">Warning: <br>this will delete all session variables.</small>
    </div>
</div>
</body>
</html>