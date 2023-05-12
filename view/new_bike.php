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

<h3>New Bike</h3>
<?php
$user = 'root';
$pwd = '';
$db = new PDO('mysql:host=localhost:3307;dbname=pillaBike', $user, $pwd);
?>
<form method="post">
    <div class="mb-3">
        <label for="buy_date" class="form-label">Buy Date:</label>
        <input type="date" name="buy_date" required><br>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <input type="text" name="description" required><br>
    </div>
    <div class="mb-3">
        <label for="electric" class="form-label">Electric:</label>
        <input type="checkbox" name="electric" value="1"><br>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="text" name="price" required><br>
    </div>
    <div class="mb-3">
        <label for="parking_id" class="form-label">Parking:</label>
        <select name="parking_id" class="form-select form-select-lg mb-3" style="width: 1000px">
            <option value="">Choose</option>
            <?php
            $query = $db->prepare("SELECT * FROM parking");
            $query->execute();
            $parkings = $query->fetchAll();

            foreach ($parkings as $parking):
                echo '<option value"'.$parking["id"].'">'.$parking["name"].'</option>';
            endforeach;
            ?>
        </select>
    </div>
<br>
    <input type="submit" class="btn btn-outline-success" name="registro" value="Add">
</form>
</body>
</html>