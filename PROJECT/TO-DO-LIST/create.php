<?php
    require './database.php';

    if(isset($_POST['addTodo'])){
        $todo = $_POST['todo'];
      

        $queryAdd = "INSERT INTO list VALUES(null, '$todo')";
        $sqlAdd = mysqli_query($connection, $queryAdd);

        echo "<script>alert('SUCCESSFULLY ADDED LIST')</script>";
        echo "<script>window.location.href='index.php'</script>";

    }

    else{
        echo "<script>window.location.href='index.php'</script>";
    }
?>
