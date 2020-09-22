<?php
    require_once ('config.php');
    $objCrudDb->updateUser($my_Db_Connection, $_POST['id'], $_POST['firstname'], $_POST['lastname'], $_POST['email']);
