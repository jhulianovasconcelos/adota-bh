<?php
include('php/connection.php');
include('php/classes/Pet.php');
$sql = 'SELECT * FROM tb_pets';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adota-BH</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h2>Pets Disponíveis para adoção:</h1>
        <div class="container text-center">
            <div class="row g-2">
                <?php
                foreach ($conn->query($sql) as $attribute) {
                    $petObj = new Pet($attribute['petName'], $attribute['petAge'], $attribute['petAgeGroup'], $attribute['petSex'], $attribute['petBreed'], $attribute['petVaccination'], $attribute['petDeworming'], $attribute['petCastration']);
                    echo '<div class="col-3">';
                    echo '<div class="p-3 border bg-light">';
                    echo '<img src="uploads\default.jpg" class="rounded img-fluid" alt="...">';
                    echo $petObj->getName() . "<br>";
                    echo $petObj->getAgeGroup() . "<br>";
                    echo $petObj->getSex() . "<br>";
                    echo $petObj->getBreed() . "<br>";
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>

        <!-- SCRIPTS -->
        <script src="scripts/registerValidate.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>


</html>