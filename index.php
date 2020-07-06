<?php
session_start();
$sessionId = session_id();
$sessionVars = "";

foreach ($_SESSION as $key => $value) {
    $sessionVars .= "$key = $value change delete <br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Basic Email</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-light">
    Session ID <?= $sessionId ?><br>
    Session variables<br>
     <?= $sessionVars ?>
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
            <input type="submit" class="button btn btn-primary">
            <input type="reset" class="button btn btn-danger">
        </div>

    </form>
    <br>
    <a href="resetSession.php">Reset session</a>

</body>
</html>