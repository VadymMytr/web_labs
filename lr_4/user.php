<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="form_style.css">
</head>

<?php
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    $phone = $_GET["phone"];
    $email = $_GET["email"];
?>

<h2>User name: </h2> <h3> <?php echo $name ?> </h3>
<h2>User surname:</h2> <h3> <?php echo $surname ?> </h3>
<h2>User phone:</h2> <h3> <?php echo $phone ?> </h3>
<h2>User email:</h2> <h3> <?php echo $email ?> </h3>
</html>