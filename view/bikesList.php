<?php
include ("view/header.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Bike List</title>
</head>
<body style="text-align: center">
<h3>Bike List</h3>
<?php
$user = 'root';
$pwd = '';
$db = new PDO('mysql:host=localhost:3307;dbname=pillabike', $user, $pwd);
?>
<table class="table">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Buy Date</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Electric</th>
            <th scope="col">Parking</th>
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


                <td><a href="/index_delete_bike.php?id=<?php echo $bike['id'] ?>" onclick="return confirm('¿Are you sure y?'); false">Delete</a></td>
                <?php } ?>

        </tr>

    <p> <a class="btn btn-outline-success" href="./index_new_bike.php" role="button">New Bike</a>
        <a class="btn btn-outline-success" href="./index.php" role="button">Return</a>
    </p>

</table>
</body>
</html>

<?php
include ("view/footer.php");
?>
