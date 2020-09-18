<?php
require_once ('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM testwork WHERE id=:id";
$mdel = $my_Db_Connection->prepare($sql);
$mdel->bindParam(':id', $id, PDO::PARAM_INT);
if ($mdel->execute()) {
    echo 'Delete successfully';
    header('location: /index.php');
} else {
    echo 'Delete fail';
}