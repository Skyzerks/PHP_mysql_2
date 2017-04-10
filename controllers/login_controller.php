<?php
if($_action=='login'){

    if($_POST != null) {
//        $login = isset($_POST['name']) ? $_POST['name'] : null;
//        $pass = isset($_POST['password']) ? $_POST['password'] : null;
        $email = isset($_POST['logform']['email']) ? $_POST['logform']['email'] : null;
        $getUser = getUser($pdo, $email);
        if (count($getUser)>0) {
            $_SESSION['user_id'] = $getUser['id'];
            $_SESSION['user_name'] = $getUser['name'];
            $_SESSION['email'] = $getUser['email'];
            $_SESSION['role'] = 'user';
            $_SESSION['flash_msg'] = "User '<b>" .$getUser['name']. "</b>' has logged in";
            header('location: /');
            exit();
        }
        else {
            $_SESSION['flash_msg'] = "User " . $login . " is not valid";
        }
    }
    view('login');
}