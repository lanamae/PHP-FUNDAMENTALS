<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'php-crud';

$connection = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_error()){
    echo "ERROR FOUND!";
    echo "ERRORl " .mysqli_connect_error();
}

else{
    echo "SUCCESS CONNECTION!";
}



?>