<?php
    require_once ('config.php');
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];


    $myInsert = $my_Db_Connection->prepare("INSERT INTO testwork (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
    $myInsert->bindParam(':firstname', $firstname);
    $myInsert->bindParam(':lastname', $lastname);
    $myInsert->bindParam(':email', $email);
    if ($myInsert->execute()) {
        echo 'New record created successfully';
        header('location: /index.php');
    } else {
        echo 'Unable to create record';
    }

