<?php

include_once __DIR__ . "/../config/database.php";
class CrudAccount
{

    public function insertAccount($table, $balance, $holdername, $pdo)
    {
        $sql = "INSERT INTO $table (holdername, acount_balance) VALUES (:holdername, :acount_balance)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':holdername' => $holdername,
            ':acount_balance' => $balance
        ]);
    }
    public function insertType($table, $column_type, $data_type, $pdo)
    {
        echo $data_type;

        $sql = "INSERT INTO $table ($column_type, number_account) VALUES (:column_type, :number_account)";

        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute([
                ':column_type' => $data_type,
                ':number_account' => $pdo->lastInsertId()
            ]);
            header("Location: ../index.php");
        } catch (PDOException $ex){
            echo "d'ont inserted".$ex->getMessage();
        }
    }

    public function getAccounts($pdo)
    {

        $sql = "SELECT  
                acount.holdername, acount.number_account,
                BusinessAccount.BusinessAccount_Frais,
                -- BusinessAccount.type_name AS type_B,
                currentaccount.Retraits,
                -- currentaccount.type_name
                savingsaccount.Taux,
                -- savingsaccount.type_name
                COALESCE(BusinessAccount.type_name, currentaccount.type_name, savingsaccount.type_name) AS account_type
                FROM acount 
                LEFT JOIN BusinessAccount ON acount.number_account = BusinessAccount.number_account 
                LEFT JOIN currentaccount ON acount.number_account = currentaccount.number_account 
                LEFT JOIN savingsaccount ON acount.number_account = savingsaccount.number_account
        ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function deleting($id, $pdo){
        
            $sql = "DELETE FROM acount WHERE number_account = :id";
            $stmt = $pdo->prepare($sql);
            if ($stmt->execute([':id' => $id])) {
                header("Location: ../index.php");
            }else{
                echo "d'ont delete";
            }
    }

    public function getAccount($id, $pdo){
        
            $sql = "SELECT * FROM acount WHERE number_account = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);
            $result  = $stmt->fetchAll();  

            if ($result) {
                session_start();
                $_SESSION['data'] = $result;
                header("Location: ../view/updateAccount.php");
                exit();
            }else{
                echo "no data";
            }
    }

    public function Updateaccount($id, $table, $balance, $holdername, $pdo)
    {
        $sql = "UPDATE $table SET holdername = :holdername , acount_balance = :acount_balance WHERE number_account = :id" ;

        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([
                ':holdername' => $holdername,
                ':acount_balance' => $balance,
                ':id' => $id
            ]);
            header("Location: ../index.php");
        } catch (PDOException $e) {
            echo 'no updated'.$e->getMessage();
        }
    }
}

