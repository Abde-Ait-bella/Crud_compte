<?php
include_once "../moduls/crudAccount.php";
include_once "../config/database.php";

$pdo = Database::getConnextion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $holdername = $_POST['holdername'];
    $acount_balance = $_POST['acount_balance'];

    if (isset($_POST['BusinessAccount_Frais'])) {
        $data_type_account = $_POST['BusinessAccount_Frais'];
        $column_type_account = 'BusinessAccount_Frais';
    }elseif (isset($_POST['Retraits'])) {
        $data_type_account = $_POST['Retraits'];
        $column_type_account = 'Retraits';
    }else{
        $data_type_account = $_POST['Taux'];
        $column_type_account = 'Taux';
    }

    $table = $_POST['table'];

    $insert_account = new CrudAccount();
    $insert_account->insertAccount('acount', $acount_balance, $holdername, $pdo);
    $insert_account->insertType($table, $column_type_account, $data_type_account, $pdo);
}

