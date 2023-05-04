<?php
include_once('connection.php');
$petName = $_POST['petName'];
$petAge = $_POST['petAge'];
$petAgeGroup = $_POST['petAgeGroup'];
$petSex = $_POST['petSex'];
$petBreed = $_POST['petBreed'];
$petVaccination = $_POST['petVaccination'];
$petDeworming = $_POST['petDeworming'];
$petCastration = $_POST['petCastration'];
$petImage = $_FILES['petImage'];
$image = explode('.', $petImage['name']);
move_uploaded_file($petImage['tmp_name'], '../uploads/'.$petImage['name']);

if ($petAgeGroup == "adult") {
    $petAge = $petAge * 12;
}



$petId = rand(100000, 999999);

try {

    $stm = $conn->prepare("INSERT INTO tb_pets (petId, petName, petAge, petAgeGroup, petSex, petBreed, petVaccination, petDeworming, petCastration) VALUES (:petId, LOWER(:petName), :petAge, :petAgeGroup, :petSex, :petBreed, :petVaccination, :petDeworming, :petCastration)");
    $stm->bindParam(':petId', $petId);
    $stm->bindParam(':petName', $petName);
    $stm->bindParam(':petAge', $petAge);
    $stm->bindParam(':petAgeGroup', $petAgeGroup);
    $stm->bindParam(':petSex', $petSex);
    $stm->bindParam(':petBreed', $petBreed);
    $stm->bindParam(':petVaccination', $petVaccination);
    $stm->bindParam(':petDeworming', $petDeworming);
    $stm->bindParam(':petCastration', $petCastration);
    $stm->execute();
    $conn = null;
    Header("Location: show-table-pets.php");
} catch (PDOException $e) {
    echo ("erro PDO " . $e->getMessage());
} catch (Exception $e) {
    echo ("erro: " . $e->getMessage());
}
