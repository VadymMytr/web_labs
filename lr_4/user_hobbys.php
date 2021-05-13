<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="form_style.css">
</head>

<?php
    $hobbys = $_GET["hobbys"];
?>

<h2>User hobbys:</h2> <h3> <?php echo $hobbys ?> </h3>
</html>