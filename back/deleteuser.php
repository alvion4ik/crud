<?php
    require_once ('config.php');
    $objCrudDb->deleteUser($my_Db_Connection, $_GET['id']);