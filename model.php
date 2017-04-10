<?php

$model_routes = [
    'account',
    'main'
//    'auth',
//    'catalog',
//    'user',
//    'categories',
//    'products',
//    'orders',
//    'reviews'
];
foreach ($model_routes as $route){
    $path = 'models/'.$route.'_model.php';
    if(file_exists($path)) {
        include_once 'models/' . $route . '_model.php';
    }
    else{
        cap($path, 'file');
        exit();
    }
}
//include_once 'repository/productsRepository.php';
//include_once 'repository/userRepository.php';
