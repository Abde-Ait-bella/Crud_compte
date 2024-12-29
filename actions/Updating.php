<?php

include_once "../moduls/crudAccount.php";
include_once "../config/database.php";

$pdo = Database::getConnextion();
print_r($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $holdername = $_GET['holdername'];
    $acount_balance = $_GET['acount_balance'];
    $id = $_GET['id'];

    $insert_account = new CrudAccount();
    $insert_account->Updateaccount($id, 'acount', $acount_balance, $holdername, $pdo);

} else {
    echo "no good";
}
