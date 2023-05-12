<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>NUEVO PRODUCTO</title>
</head>
<body>

<h3>New Parking</h3>
<?php
$user = 'root';
$pwd = '';
$db = new PDO('mysql:host=localhost;dbname=pillaBike', $user, $pwd);
?>
<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>
    <label for="city">City:</label>
    <input type="text" name="city" required><br>
    <label for="open">Open:</label>
    <input type="time" name="open" required><br>
    <label for="close">Close:</label>
    <input type="time" name="close" required><br>
    <label for="is_full">Full:</label>
    <input type="checkbox" name="is_full" value="1"><br>

    <input type="submit" name="registro" value="Add">
</form>
</body>
</html>