<?php
session_start();
$sessionId = session_id();
$sessionVars = "";

foreach ($_SESSION as $key => $value) {
    $sessionVars .= "$key = $value";
    
    $sessionVars .= "<form method='post' action='modVariable.php' class='noWrap'>\n";
    $sessionVars .= "<input type='hidden' value='$key' name='key'>\n";
    $sessionVars .= "<input type='submit' class='button btn btn-primary' value='Change'>\n";
    $sessionVars .= "</form>\n";
    
    $sessionVars .= "<form method='post' action='deleteVariable.php' class='noWrap'>\n";
    $sessionVars .= "<input type='hidden' value='$key' name='key'>\n";
    $sessionVars .= "<input type='submit' class='button btn btn-primary' value='Delete'>\n";
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
<title>Basic Email</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>

.noWrap {
    display: inline;
}
</style>
</head>
<body class="bg-light">
    Session ID <?= $sessionId ?> change session id<br><br>
    Session variables<br>
     <?= $sessionVars ?>
     <br>
    Add a new session variable<br>
    <form method="post" action="addVariable.php">

        <div class="form-group">
            <label for="name">Variable Name</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="data">Variable Data</label>
            <input type="text" id="data" name="data" class="form-control">
        </div>


        <div class="form-group">
            <input type="submit" class="button btn btn-primary" value="Add">
            <input type="reset" class="button btn btn-danger">
        </div>

    </form>
    <br>
    <a href="resetSession.php">Reset session</a>

</body>
</html>