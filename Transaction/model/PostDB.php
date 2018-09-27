<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 26/09/2018
 * Time: 09:47
 */

namespace Model;

use PDO;

class PostDB
{
    public $conn;

    public function __construct (PDO $conn)
    {
        $this->conn = $conn;
    }

    public function getUserAccount ()
    {
        $sql = "SELECT * FROM user_account";
        $userName = $this->conn->query($sql);
        $result = $userName->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getTransactionHistory ()
    {
        $sql = "SELECT * FROM transaction_history";
        $trans = $this->conn->query($sql);
        $result = $trans->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function getById ($id)
    {
        $sql = "SELECT * FROM user_account WHERE id = '$id'";
        $result = $this->conn->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data[0];
    }

    public function create ($targetId, $amount, $sourceId, $dateTime, $content)
    {
        $this->conn->beginTransaction();
        $sql = "SELECT `balance` FROM user_account WHERE id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$targetId]);
        $amountAvailable = (int)$query->fetchColumn();

        if ($amountAvailable > $amount) {
            $sqlTarget = "UPDATE user_account SET balance=balance - ? WHERE id = ?";
            $query = $this->conn->prepare($sqlTarget);
            $query->execute([$amount, $targetId]);

            $sqlSource = "UPDATE user_account SET balance=balance + ? WHERE id = ?";
            $query = $this->conn->prepare($sqlSource);
            $query->execute([$amount, $sourceId]);
            $success = 1;


        } else {
            $success = 0;
            echo "số tiền của bạn không đủ ";
        }

        $moreTransactions = "INSERT INTO `transaction_history` (`target_id`, `source_id`, `amount`,`content`,`datetime`,`success`) VALUES (?,?,?,?,?,?)";
        $query = $this->conn->prepare($moreTransactions);
        $query->execute([$targetId, $sourceId, $amount, "$content", "$dateTime", $success]);
        $this->conn->commit();
    }


    public function check ($account, $passWord)
    {
        $sqlAcc = "SELECT `user_name` FROM `user_account` WHERE `user_name` = '$account'";
        $checkAcc = $this->conn->query($sqlAcc);
        $result = $checkAcc->fetchAll(PDO::FETCH_ASSOC);

        if ($result == null) {
            header('Location: index.php');
        } else {
            $sql = "SELECT `user_name`, `pass_word` FROM `user_account` WHERE `user_name` = '$account' AND `pass_word` = '$passWord'";
            $checkAccPass = $this->conn->query($sql);
            $result = $checkAccPass->fetchAll(PDO::FETCH_ASSOC);

            if ($result == null) {
                header("HTTP/1.0 405 Not Found");
            } else {
                header('Location: index.php?page=index');
            }
        }

    }

}