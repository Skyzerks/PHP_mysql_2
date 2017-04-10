<?php

//var_dump($_POST);
//exit();

//if($_action=='account'){
//    $user = getUser($pdo, $_POST['logform']['email']);
//
//}

$categories=getCategories($pdo);
$account = [];
$account_ids= getUserAccountsById($pdo, $_SESSION['user_id']);
//var_dump($account_ids);
//exit();
foreach ($account_ids as $key => $account_id){
    $accounts[$key]=getUserAccountByAccountId($pdo, $account_id['account_id']);
}

if(isset($_POST['method'])){
//    var_dump($_POST['form']);
//    exit();
    $method = $_POST['method'];
    switch($method){
        case 'create_account':{
            //
            createAccount($pdo, $_POST['form']['description'], $_SESSION['user_id']);

            break;
        }
        case 'create_transaction':{
            //
//            var_dump($_POST['form']);
//            exit();
            createTransaction($pdo, $_POST['form']);
            
            break;
        }

    }
}

view('account', ['categories'=>$categories, 'accounts'=>$accounts ]);