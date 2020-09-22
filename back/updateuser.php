<?php
    require_once ('config.php');
    $objCrudDb->updateUser($_POST['id'], $_POST['firstname'], $_POST['lastname'], $_POST['email']);
