<?php

include_once "../moduls/crudAccount.php";

$pdo = Database::getConnextion();

if (isset($_GET['id'])) {
    $crud = new CrudAccount();
    $crud->deleting($_GET['id'], $pdo);
}else{
    echo "id field";
}
