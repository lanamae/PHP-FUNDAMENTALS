<?php 
    require './database.php';

    if(isset($_POST['delete'])){
        $deleteId = $_POST['deleteId'];

    $queryDelete = "DELETE FROM list WHERE id='$deleteId'";
    $sql = mysqli_query($connection, $queryDelete);

    echo "<script>alert('SUCCESSFULLY DELETED LIST')</script>";
    echo "<script>window.location.href='index.php'</script>";

    }


?>