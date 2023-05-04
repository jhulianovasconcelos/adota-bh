<?php
include_once 'connection.php';
$petId = $_GET['petId'];
$sql = "DELETE FROM tb_pets WHERE petId = :petId";
echo $sql;
$smt = $conn->prepare($sql);
$smt->bindParam(':petId',$petId);
$smt->execute();
$conn = null;
Header("Location: show-table-pets.php")
?>