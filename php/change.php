<?php
include_once 'connection.php';
$petId = $_GET['petId'];
$sql = "SELECT * FROM tb_pets where petId = ?";
$query = $conn->prepare($sql);
$query->execute(array($petId));
$data = $query->fetch(PDO::FETCH_ASSOC);
$petName = $data['petName'];
$petAge = $data['petAge'];
$petAgeGroup = $data['petAgeGroup'];
$petSex = $data['petSex'];
$petBreed = $data['petBreed'];
$petVaccination = $data['petVaccination'];
$petDeworming = $data['petDeworming'];
$petCastration = $data['petCastration'];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdotaBH - Alterar Pet</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container-change">
        <div class="form-change">
            <form action='update.php?petId=<?php echo $petId ?>' method="POST">
                <h1>Alterar Dados do Pet</h1>

                <div class="form-group">
                    <label for="petId">ID:</label>
                    <input class="form-control" type="text" name="petId" value=<?php echo $petId; ?> readonly>
                </div>

                <div class="form-group">
                    <label for="petName">Nome:</label>
                    <input class="form-control" type="text" name="petName" value="<?php echo $petName; ?>">
                </div>

                <div class="form-group">
                    <label for="petAge">Idade em meses:</label>
                    <input class="form-control" type="text" name="petAge" value=<?php echo $petAge; ?>>
                </div>

                <div class="form-group">
                    <label for="petAgeGroup">Faixa etária:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="petAgeGroup" id="petAgeGroup" value="adult" <?php if ($petAgeGroup == 'adult') echo "checked"; ?>>
                        <label class="form-check-label" for="petAgeGroup">Adulto</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="petAgeGroup" id="petAgeGroup" value="pup" <?php if ($petAgeGroup == 'pup') echo "checked"; ?>>
                        <label class="form-check-label" for="petAgeGroup">Filhote</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="petSex">Sexo:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="petSex" id="petSex" value="m" <?php if($petSex == 'm') echo "checked"; ?>>
                        <label class="form-check-label" for="petSex">Macho</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="petSex" id="petSex" value="f" <?php if($petSex == 'f') echo "checked"; ?>>
                        <label class="form-check-label" for="petSex">Fêmea</label>
                    </div>
                </div>


                <div class="form-group">
                    <label for="petBreed">Raça:</label>
                    <select class="form-control" name="petBreed" id="petBreed">
                        <option value="<?php echo $petBreed ?>"><?php echo $petBreed ?></option>
                        <option value="srd">SRD(Sem raça definida)</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="petVaccination">Vacinado:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="petVaccination" id="petVaccination" value="true" <?php if ($petVaccination == 'true') echo "checked"; ?>>
                        <label class="form-check-label" for="petVaccination">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="petVaccination" id="petVaccination" value="false" <?php if ($petVaccination == 'false') echo "checked"; ?>>
                        <label class="form-check-label" for="petVaccination">Não</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="petDeworming">Vermifugado:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="petDeworming" id="petDeworming" value="true" <?php if ($petDeworming == 'true') echo "checked"; ?>>
                        <label class="form-check-label" for="petDeworming">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="petDeworming" id="petDeworming" value="false" <?php if ($petDeworming == 'false') echo "checked"; ?>>
                        <label class="form-check-label" for="petDeworming">Não</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="petCastration">Castrado:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="petCastration" id="petCastration" value="true" <?php if ($petCastration == 'true') echo "checked"; ?>>
                        <label class="form-check-label" for="petCastration">Sim</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="petCastration" id="petCastration" value="false" <?php if ($petCastration == 'false') echo "checked"; ?>>
                        <label class="form-check-label" for="petCastration">Não</label>
                    </div>
                </div>

                <!-- <label for="petImages">Imagens: </label>
                <input type="file" name="petImages">
                <br> -->
                <div class="submit-btn">
                    <button class="btn btn-primary" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="../scripts/breedList.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>

</body>

</html>