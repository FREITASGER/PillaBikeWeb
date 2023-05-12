<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Parking List</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h3>Parking List</h3>
<table >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Open</th>
            <th>Close</th>
            <th>Is Full?</th>
        </tr>
        <?php
        foreach ($parkings as $parking) {  ?>
            <tr>
                <td> <?php echo $parking['id'] ?></td>
                <td> <?php echo $parking['name'] ?></td>
                <td> <?php echo $parking['city'] ?></td>
                <td> <?php echo $parking['open'] ?></td>
                <td> <?php echo $parking['close'] ?></td>
                <td> <?php echo $parking['is_full'] ? 'Yes' : 'No' ?></td>
                <td><a href="/index_delete_parking.php?id=<?php echo $parking['id'] ?>" onclick="return confirm('Are you sure you want to remove this product?'); false">Delete</a></td>
                <?php } ?>
        </tr>

    <p> <a href="./index_new_parking.php">New Parking</a>
        <a href="./index.php">Return</a>
    </p>
</table>
</body>
</html>
