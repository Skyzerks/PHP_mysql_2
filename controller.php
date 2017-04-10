<?php

if(isset($_action)) {

    if( $_action == 'account' ) {
        $controllerFileName = 'controllers/' . $_action . '_controller.php';
        if (file_exists($controllerFileName)) {
            include_once "$controllerFileName";
        }
    }
//    else {
//        if($_SESSION['role']=='user')  {
//
//            $controllerFileName = 'controllers/admin/' . $_subAction . '_controller.php';
//            if(file_exists( $controllerFileName )) {
//                include_once "$controllerFileName";
//            }
//            else{
//                view('account');
//            }
//        }
//        else {
//            header('location: /404');
//            exit();
//        }
//    }
}
