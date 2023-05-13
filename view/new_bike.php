<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>NUEVO PRODUCTO</title>
</head>
<body>

<h3>New Bike</h3>
<?php
$user = 'pillabike';
$pwd = 'pillabike';
$db = new PDO('mysql:host=localhost;dbname=pillaBike', $user, $pwd);
?>
<form method="post">
    <label for="buy_date">Buy Date:</label>
    <input type="date" name="buy_date" required><br>
    <label for="description">Description:</label>
    <input type="text" name="description" required><br>
    <label for="electric">Electric:</label>
    <input type="checkbox" name="electric" value="on"><br>
    <label for="price">Price:</label>
    <input type="text" name="price" required><br>
    <label for="parking_id">Parking:</label>
    <select name="parking_id" class="form-control">
        <option value="">Choose</option>
        <?php
        $query = $db->prepare("SELECT * FROM parking");
        $query->execute();
        $parkings = $query->fetchAll();

        foreach ($parkings as $parking):
            echo '<option value"'.$parking["id"].'">'.$parking["id"].'</option>';
        endforeach;
        ?>
    </select>
<br>
    <input type="submit" name="registro" value="Add">

    <p> <a href="index_bikes_list.php">Bikes' List</a>
        <a href="./index.php">Main Menu</a>
    </p>
</form>
</body>
</html>