<?php
//entered the page
session_start();

//MVC - model-view-controller

//custom functions
include_once 'helpers.php';
//all configurations
include_once 'config.php';
//database connection
include_once 'database.php';
//SQL queries and other function helpers (repository -> model)
include_once 'model.php';
//routing
include_once 'routing.php';
//main logic
include_once 'controller.php';
