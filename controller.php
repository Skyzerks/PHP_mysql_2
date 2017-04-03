<?php

if(isset($_action)) {

    if( $_action != 'admin' ) {
        $controllerFileName = 'controllers/' . $_action . '_controller.php';
        if (file_exists($controllerFileName)) {
            include_once "$controllerFileName";
        }
    }
    else {
        if($_SESSION['role'] == 'admin' )  {

            $controllerFileName = 'controllers/admin/' . $_subAction . '_controller.php';
            if(file_exists( $controllerFileName )) {
                include_once "$controllerFileName";
            }
            else{
                view('admin/main');
            }
        }
        else {
            header('location: /login');
            exit();
        }
    }
}
