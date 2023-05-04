<?php
include_once 'connection.php';
include_once '../search.html';
$petName = $_GET['petName'];
$sql = "SELECT petName FROM tb_pets WHERE petName LIKE :petName";
$stm = $conn->prepare($sql);
$petName = "%" . $petName . "%";
$stm->bindParam(":petName", $petName, PDO::PARAM_STR);
$stm->execute();
?>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Faixa Etária</th>
        <th>Sexo</th>
        <th>Raça</th>
        <th>Vacinação</th>
        <th>Vermifugação</th>
        <th>Castração</th>
        <th>Atualizar</th>
        <th>Deletar</th>
    </tr>

    <?php
    $sql = 'SELECT * FROM tb_pets';
    foreach ($stm as $row) {
        echo "<tr>";
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
    <input type="button" value="cadastrar" onclick="window.location.href='../index.html';">

</table>