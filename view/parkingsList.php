<?php
include ("view/header.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Parking List</title>
</head>
<body style="text-align: center">
<h3>Parking List</h3>

<table class="table">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">City</th>
            <th scope="col">Open</th>
            <th scope="col">Close</th>
            <th scope="col">Is Full?</th>
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

    <p> <a class="btn btn-outline-success" href="./index_new_parking.php" role="button">New Parking</a>
        <a class="btn btn-outline-success" href="./index.php" role="button">Return</a>
    </p>
</table>
</body>
</html>
