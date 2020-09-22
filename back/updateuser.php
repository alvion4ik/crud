<?php
require_once ('config.php');

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$sql = "UPDATE testwork SET firstname=:firstname, lastname=:lastname, email=:email WHERE id=:id";
$mupd = $my_Db_Connection->prepare($sql);
$mupd->bindParam(':id', $id, PDO::PARAM_INT);
$mupd->bindParam(':firstname', $firstname);
$mupd->bindParam(':lastname', $lastname);
$mupd->bindParam(':email', $email);
if ($mupd->execute()) {
    echo 'Update successfully';
    header('location: /index.php');
} else {
    echo 'Update fail';
}