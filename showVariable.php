<?php

session_start();

$key = $_POST["key"];
$value = $_SESSION[$key];

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
<div class="centered" style=""><br>
<h2>Modify a session variable</h2>
    <form method="post" action="modVariable.php">

        <div class="form-group">
            <label for="name" class="centered">Variable Name</label>
            <?= $key ?>
            <input type='hidden' value='<?= $key ?>' name='key'>
        </div>

        <div class="form-group ">
            <label for="data" class="centered">Variable Data</label>
            <input type="text" id="data" name="data" class="form-control centered" value="<?= $value ?>">
        </div>

        <div class="form-group centered" style="">
            <input type="submit" class="button btn btn-primary" value="Modify">
            <input type="reset" class="button btn btn-danger">
        </div>

    </form>
    </div>
</body>
</html>