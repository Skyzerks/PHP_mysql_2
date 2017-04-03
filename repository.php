<?php

$repositoryRoutes = [
//    'auth',
//    'catalog',
//    'user',
//    'categories',
//    'products',
//    'orders',
//    'reviews'
];
foreach ($repositoryRoutes as $route){
    $path = 'repository/'.$route.'_repository.php';
    if(file_exists($path)) {
        include_once 'repository/' . $route . '_repository.php';
    }
    else{
        cap($path, 'file');
        exit();
    }
}
//include_once 'repository/productsRepository.php';
//include_once 'repository/userRepository.php';
