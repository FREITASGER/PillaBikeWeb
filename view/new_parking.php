<?php
include "view/header.php";
?>

<body>

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
                                    <h4 class="mt-1 mb-5 pb-1">Add Parking</h4>
                                </div>
                                    <?php
                                    $user = 'pillabike';
                                    $pwd = 'pillabike';
                                    $db = new PDO('mysql:host=localhost;dbname=pillaBike', $user, $pwd);
                                    ?>
                                <form method="post">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Name:</label>
                                        <input type="text" name="name" required class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">City:</label>
                                        <input type="text" name="city" required class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Open:</label>
                                        <input type="text" name="open" required class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Close:</label>
                                        <input type="text" name="close" required class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Full:</label>
                                        <input type="text" name="is_full" value="on" class="form-control" />
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                    <input class="btn btn-outline-warning" type='submit' name='registro' value='Add'>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                    <p> <a href="index_parkings_list.php" class="btn btn-outline-dark" type="button">Parking List</a>
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