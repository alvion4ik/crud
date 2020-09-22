<?php
require_once ('config.php');
$result = $objCrudDb->deleteUser($my_Db_Connection, $_GET['id']);