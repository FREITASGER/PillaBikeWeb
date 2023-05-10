<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Bike List</title>
</head>
<body>
<h3>Bike List</h3>
<table border="1">
    <!--    si el usuario es admin ve la tabla completa-->
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Electric</th>
        </tr>
        <?php
        foreach ($bikes as $bike) {  ?>
            <tr>
                <td> <?php echo $bike['id'] ?></td>
                <td> <?php echo $bike['buyDate'] ?></td>
                <td> <?php echo $bike['description'] ?></td>
                <td> <?php echo number_format($bike['price'], 2) ?> €</td>
                <td> <?php echo $bike['electric'] ?></td>
        <?php } ?>
        </tr>

</table>
</body>
</html>
