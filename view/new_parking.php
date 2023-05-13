<!DOCTYPE html>
<html lang="es">
<!-- Para usar la hoja de estilos de  Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- FIN hoja de estilos de  Bootstrap -->
<!--Para incrustar las fuente desde google-->
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;900&display=swap" rel="stylesheet">
<!--FIN incrustar las fuente desde google-->


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
                                        <input type="time" name="open" required class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Close:</label>
                                        <input type="time" name="close" required class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Full:</label>
                                        <input type="checkbox" name="is_full" value="on" />
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