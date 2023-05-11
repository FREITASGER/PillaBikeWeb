<?php
include ("view/header.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Bike List</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h3>Bike List</h3>
<?php
$user = 'root';
$pwd = '';
$db = new PDO('mysql:host=localhost;dbname=pillaBike', $user, $pwd);
?>
<table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Electric</th>
            <th>Parking</th>
        </tr>
        <?php
        foreach ($bikes as $bike) {
            $parking_id = $bike['parking_id'];
            $query = $db->prepare("SELECT name FROM parking WHERE id = ?");
            $query->execute([$parking_id]);
            $row = $query->fetch();
            $parking_name = $row['name'];

            ?>
            <tr>
                <td> <?php echo $bike['id'] ?></td>
                <td> <?php echo $bike['buy_date'] ?></td>
                <td> <?php echo $bike['description'] ?></td>
                <td> <?php echo number_format($bike['price'], 2) ?> €</td>
                <td> <?php echo $bike['electric'] ? 'Yes' : 'No' ?></td>
                <td> <?php echo $parking_name ?></td>


                <td><a href="/index_delete_bike.php?id=<?php echo $bike['id'] ?>" onclick="return confirm('¿Estás seguro que quieres eliminar este producto?'); false">Delete</a></td>
                <?php } ?>

        </tr>

    <p> <a href="index_new_bike.php">New Bike</a>
        <a href="./index.php">Return</a>
    </p>

</table>
</body>
</html>

<?php
include ("view/footer.php");
?>
