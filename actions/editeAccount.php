<?php

include_once __DIR__."/../config/database.php";
include_once __DIR__."/../moduls/crudAccount.php";

$pdo = Database::getConnextion();

if (isset($_GET['id'])) {
    $crudAccount = new CrudAccount();
    $crudAccount->getAccount($_GET['id'], $pdo);
}else{
    echo "id field";
}