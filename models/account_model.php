<?php

function getCategories($pdo ) {

    $select= $pdo->prepare("SELECT * FROM `categories`");
    $select->execute();
    $categories = $select ->fetchAll();

    return $categories;
}
function getUserAccountsById($pdo, $user_id ) {

    $select = $pdo->prepare("SELECT `account_id` FROM `users_accounts` WHERE `user_id`=".$user_id);
    $select->execute();
    $user_accounts=$select->fetchAll();

    return $user_accounts;
}

function getUserAccountByAccountId($pdo, $account_id){
    $select= $pdo->prepare("SELECT * FROM `accounts` WHERE `id`=".$account_id);
    $select->execute();
    $account = $select ->fetchAll();

    return $account;
}

function createAccount($pdo, $description, $user_id){

    $unique_id = uniqid();
    $insert = $pdo->prepare("INSERT INTO `accounts`(`unique_id`, `description`) VALUES (?,?)");
    $res[0] = $insert->execute(array($unique_id, $description));

    //id, user_id, account_id
    $account_id = $pdo->lastInsertId();
    $insert = $pdo->prepare("INSERT INTO `users_accounts`(`user_id`, `account_id`) VALUES (?,?)");
    $res[1] = $insert->execute(array($user_id, $account_id));

    return $res;
}

function createTransaction($pdo, $array){

    //id, account_id, category_id, price, description, created_at
    $account_id = $array['account_id'];
    $category_id = $array['category_id'];
    $description = $array['description'];
    $created_at = date('Y-m-d H:i:s');
    $price = $array['price'];
    $insert = $pdo->prepare("INSERT INTO `transactions`(`account_id`, `category_id`, `price`, `description`, `created_at`) VALUES (?,?,?,?,?)");
    $res = $insert->execute(array($account_id, $category_id, $price, $description, $created_at ));


    return $res;
}
