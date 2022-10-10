<?php
    require './database.php';

    if(isset($_POST['edit'])){
        $editId = $_POST['editId'];
        $editUsername = $_POST['editUsername'];
        $editPassword = $_POST['editPassword'];
    }


    if(isset($_POST['update'])){
        $updateId = $_POST['updateId'];
        $updateUsername = $_POST['updateUsername'];
        $updatePassword = $_POST['updatePassword'];


        $queryUpdate = "UPDATE accounts SET username='$updateUsername', password='$updatePassword' WHERE id='$updateId'";
        $sqlUpdate = mysqli_query($connection, $queryUpdate);

        echo "<script>alert('SUCCESSFULLY UPDATED DATA')</script>";
        echo "<script>window.location.href='index.php'</script>";


    }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-CRUD</title>
</head>
<body>
    <div class="main">
        <div class="create-main">
            <form action="update.php" method="POST">
                <h2>UPDATE ACCOUNT</h2>
                <label for="username">UserName: </label>
                <input type="text" name="updateUsername" id="username" placeholder="Enter your Username" value=<?php echo $editUsername ?> />
                <br> <br>

                <label for="password">Password: </label>
                <input type="text" name="updatePassword" id="password" placeholder="Enter your Password" value= <?php echo $editPassword ?>/>
                <br><br>

                <input type="submit" name="update" value="UPDATE">

                <input type="hidden" name="updateId" value=<?php echo $editId ?> />
            </form>
        </div>


     

    </div>    

</body>
</html>