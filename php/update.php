<?php
include_once 'connection.php';
$petId = $_POST['petId'];
$petName = $_POST['petName'];
$petAge = $_POST['petAge'];
$petAgeGroup = $_POST['petAgeGroup'];
$petSex = $_POST['petSex'];
$petBreed = $_POST['petBreed'];
$petVaccination = $_POST['petVaccination'];
$petDeworming = $_POST['petDeworming'];
$petCastration = $_POST['petCastration'];

echo $petId . " " . $petName . " " . $petAge;
$sql = "UPDATE tb_pets SET petId = :petId, petName = :petName, petAge = :petAge, petAgeGroup = :petAgeGroup, petSex = :petSex, petBreed = :petBreed, petVaccination = :petVaccination, petDeworming = :petDeworming, petCastration = :petCastration WHERE petId = :petId";
$smt = $conn->prepare($sql);
$smt->bindParam(':petId',$petId);
$smt->bindParam(':petName',$petName);
$smt->bindParam(':petAge',$petAge);
$smt->bindParam(':petAgeGroup',$petAgeGroup);
$smt->bindParam(':petSex',$petSex);
$smt->bindParam(':petBreed',$petBreed);
$smt->bindParam(':petVaccination',$petVaccination);
$smt->bindParam(':petDeworming',$petDeworming);
$smt->bindParam(':petCastration',$petCastration);
$smt->execute();
echo "Dados alterados";
$conn = null;
Header("Location: show-table-pets.php")
?>