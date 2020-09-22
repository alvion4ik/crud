<?php
    require_once ('config.php');
    $objCrudDb->createUser($my_Db_Connection, $_POST['firstname'], $_POST['lastname'], $_POST['email']);
