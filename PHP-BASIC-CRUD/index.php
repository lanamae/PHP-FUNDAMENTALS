<?php 
    require ('./read.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BASIC CRUD</title>
</head>

<style>
    .main{
        padding: 100px;
    }
</style>

<body>
    <div class="main">

        <div class="create-main">
            <form action="create.php" method="post">
                <h2>CREATE USER</h2>
                
                <input type="text" name="username" id="username" placeholder="Enter Your UserName"> <br>
                <input type="text" name="password" id="password" placeholder="Enter Your password">
                <br><br>
                <input type="submit" name="create" value="SUBMIT">

            </form>

            <hr>


            <table class="read-main">
                <tr>
                    <th>ID<th>
                    <th>USERNAME<th>
                    <th>PASSWORD<th>
                    <th>ACTIONS<th>
                </tr>  
                
                <?php 
                    while($results = mysqli_fetch_array($sqlAccounts)){ ?>

                    <tr>
                        <td><?php echo $results['id'] ?> <td>
                        <td><?php echo $results['username'] ?> <td>
                        <td><?php echo $results['password'] ?> <td>
                        <td>
                            <form action="#" method=post>
                                <input type="submit" name="edit" value="EDIT">
                            </form>
                            <form action="#" method=post>
                                <input type="submit" name="delete" value="DELETE">
                            </form>
                        </td>
                    </tr> 

                   <?php }?>












        </table>

     
    
    </div>


    </div>
    
</body>
</html>