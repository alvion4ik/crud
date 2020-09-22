<?php
    require_once ('config.php');
    $objCrudDb->createUser($_POST['firstname'], $_POST['lastname'], $_POST['email']);
