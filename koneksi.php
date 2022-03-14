<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '' );
    define('DB', 'pkc' );

    $connection = mysqli_connect( HOST, USER, PASS, DB ) or die 
    ('Unable connect');

    
?>