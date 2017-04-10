<?php

function getUser( $pdo, $email ) {
    $user = sql($pdo,
        'SELECT * FROM `users` WHERE `email` = "'.$email.'"',
        [],
        'rows'
    );
    return $user[0];
}