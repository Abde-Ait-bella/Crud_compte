<?php

include_once __DIR__."/../moduls/crudAccount.php";
include_once __DIR__."/../config/database.php";

$pdo = Database::getConnextion();

$read = new CrudAccount();
$result = $read->getAccounts($pdo);

// print_r($result);

