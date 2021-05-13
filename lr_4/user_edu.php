<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="form_style.css">
</head>

<?php
    $university = $_GET["university"];
    $faculty = $_GET["faculty"];
    $course = $_GET["course"];
?>

<h2>User university:</h2> <h3> <?php echo $university ?> </h3>
<h2>User faculty:</h2> <h3> <?php echo $faculty ?> </h3>
<h2>User course:</h2> <h3> <?php echo $course ?> </h3>
</html>