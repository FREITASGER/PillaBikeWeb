<?php
include ("view/header.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>NUEVO PRODUCTO</title>
</head>
<body style="text-align: center">

<h3>New Parking</h3>
<?php
$user = 'root';
$pwd = '';
$db = new PDO('mysql:host=localhost:3307;dbname=pillaBike', $user, $pwd);
?>
<form method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" required><br>
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">City:</label>
        <input type="text" name="city" required><br>
    </div>
    <div class="mb-3">
        <label for="open" class="form-label">Open:</label>
        <input type="time" name="open" required><br>
    </div>
    <div class="mb-3">
        <label for="close" class="form-label">Close:</label>
        <input type="time" name="close" required><br>
    </div>
    <div class="mb-3">
        <label for="is_full" class="form-label">Full:</label>
        <input type="checkbox" name="is_full" value="1"><br>
    </div>

    <input type="submit" class="btn btn-outline-success" name="registro" value="Add">
</form>
</body>
</html>