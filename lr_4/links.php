<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Links</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="form_style.css">
</head>

<?php
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];


    $university = $_POST["university"];
    $faculty = $_POST["faculty"];
    $course = $_POST["course"];
    $hobbys = $_POST["hobbys"];

    $generalHref = "user.php?name=".$name."&surname=".$surname."&phone=".$phone."&email=".$email;
    $eduHref = "user_edu.php?university=".$university."&faculty=".$faculty."&course=".$course;
    $hobbysHref = "user_hobbys.php?hobbys=".$hobbys;
?>

<ul>
    <li><a href=<?php echo $generalHref ?>>General user info</a></li>
    <li><a href=<?php echo $eduHref ?>>Educational info</a></li>
    <li><a href=<?php echo $hobbysHref ?>>User hobbys</a></li>
<ul>
    
</html>