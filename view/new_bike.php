<?php
include "view/header.php";
?>

<body>
<?php
$user = 'pillabike';
$pwd = 'pillabike';
$db = new PDO('mysql:host=localhost;dbname=pillaBike', $user, $pwd);
?>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="../img/logo2.png"
                                             style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Add Bike</h4>
                                    </div>
                                    <?php
                                    $user = 'pillabike';
                                    $pwd = 'pillabike';
                                    $db = new PDO('mysql:host=localhost;dbname=pillaBike', $user, $pwd);
                                    ?>
                                    <form method="post">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Buy Date:</label>
                                            <input type="date" name="buy_date" required class="form-control" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Description:</label>
                                            <input type="text" name="description" required class="form-control" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Electric:</label>
                                            <input type="checkbox" name="electric" value="on" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Price:</label>
                                            <input type="text" name="price" required class="form-control" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Parking:</label>
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
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <input class="btn btn-outline-warning" type='submit' name='registro' value='Add'>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <p> <a href="index_bikes_list.php" class="btn btn-outline-dark" type="button">Bike List</a>
                                                <a href="./index.php" class="btn btn-outline-success" type="button">Main Menu</a>
                                            </p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <img src="/img/newParking.png" height="850" width="850"
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>