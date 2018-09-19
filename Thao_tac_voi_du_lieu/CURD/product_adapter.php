<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 17/09/2018
 * Time: 22:58
 */
require "database.php";


$database = new Database();
$conn = $database->connect('root', '123456@Abc', 'bank_database');


function getProduct()
{
    global $conn;

    $sql = "SELECT * FROM accounts ORDER BY balance DESC";

    $result = $conn->prepare($sql);
    $result->execute();
    $prodocts = $result->fetchAll(PDO::FETCH_ASSOC);
    return $prodocts;
}


function searchProduct($searchString) {
    global $conn;

    $fieldsToSearch = [
        'account_id',
        'customer_id',
        'account_type',
        'date'
    ];

    $searchQuery = [];
    foreach ($fieldsToSearch as $fieldsName) {
        $searchQuery[] = "$fieldsName LIKE '%$searchString%";
    }
    $searchQuery = implode('OR', $searchQuery);
    $sql = "SELECT * FROM accounts WHERE $searchQuery";
    $result = $conn->query($sql);
    $result = $result->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}