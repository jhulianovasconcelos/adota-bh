<?php
include_once('connection.php');
?>
<!Doctype HTML>
<html>

<head>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="table-container">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Faixa Etária</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Raça</th>
                    <th scope="col">Vacinação</th>
                    <th scope="col">Vermifugação</th>
                    <th scope="col">Castração</th>
                    <th scope="col">Atualizar</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $sql = 'SELECT * FROM tb_pets';
                    $index = 1;
                    foreach ($conn->query($sql) as $row) {
                        echo "<tr>" ;
                        echo "<th>" . $index . "</th>";
                        $index++;
                        echo "<td>" . $row['petId'] . "</td>";
                        echo "<td>" . $row['petName'] . "</td>";
                        echo "<td>" . $row['petAge'] . "</td>";
                        echo "<td>" . $row['petAgeGroup'] . "</td>";
                        echo "<td>" . $row['petSex'] . "</td>";
                        echo "<td>" . $row['petBreed'] . "</td>";
                        echo "<td>" . $row['petVaccination'] . "</td>";
                        echo "<td>" . $row['petDeworming'] . "</td>";
                        echo "<td>" . $row['petCastration'] . "</td>";
                        echo "<td><a href='change.php?petId=" . $row['petId'] . "'" . "> Atualizar</a></td>";
                        echo "<td><a href='delete.php?petId=" . $row['petId'] . "'" . "> Deletar</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    $conn = null;
                    ?>
            </tbody>
            <btton class="btn btn-primary" value="Cadastrar" onclick="window.location.href='../pet-register.html';">Cadastrar</button>
    </div>
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