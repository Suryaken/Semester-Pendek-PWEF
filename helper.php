<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'surya_crud');

    $db_connect = mysqli_connect(HOST, USER, PASS, DB ) or die ('Unable connect')
?>