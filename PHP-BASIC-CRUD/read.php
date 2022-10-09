<?php 
    require './database.php';

    $queryAccount = "SELECT * FROM accounts";
    $sqlAccount = mysqli_query($connection, $queryAccount);
    
    

?>