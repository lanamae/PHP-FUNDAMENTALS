<?php
    require './database.php';
   
    if(isset($_POST['edit'])){
        $editId = $_POST['editId'];
        $editTodo = $_POST['editTodo'];
    }


    if(isset($_POST['update'])){
        $updateId = $_POST['updateId'];
        $updateTodo = $_POST['updateTodo'];

        $queryUpdate = "UPDATE list SET listVal='$updateTodo' WHERE id='$updateId'";
        $sqlUpdate = mysqli_query($connection, $queryUpdate);

        echo "<script>alert('SUCCESSFULLY UPDATED LIST')</script>";
        echo "<script>window.location.href='index.php'</script>";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">



        <div class="create-todo">
            <form action="update.php" method="POST">
                <h2>UPDATE TODO LIST</h2>
                <input type="text" id="todo" name="updateTodo"  value="<?php echo $editTodo?>" />
                <input type="hidden" name="updateId" value="<?php echo $editId?>"/>
            
                
                <input type="submit" class="addbtn" name="update" value="UPDATE">
               
            </form>

            
        
            

        </div>

        <hr>

     



    </div>

    <div class="update">


    <div class="update-todo">
            <form action="update.php" method="POST">
                <h2>UPDATE TODO LIST</h2>
                <input type="text" name="updateTodo" id="todo" value=<?php echo $editTodo ?> />
                <input type="hidden" name="updateId" value="<?php echo $editId ?>" />
                
              
                <input type="submit" name="addTodo" value="ADD">
               
            </form>

            
        
            

        </div>
    </div>
   
    
</body>

<script> 
    // const timeDate = document.querySelector('.timeDate');
    // const setDate = document.querySelector('.setDate');

    // let dateTime = new Date();

    // timeDate.innerText = dateTime;
    // setDate.innerText = dateTime;
   
    


</script> 
</html>

<?php
    require './database.php';

    if(isset($_POST['edit'])){
        $editId = $_POST['editId'];
        $editTodo = $_POST['editTodo'];
    
    }


    if(isset($_POST['update'])){
        $updateId = $_POST['updateId'];
        $updateTodo = $_POST['updateTodo'];
      


        $queryUpdate = "UPDATE list SET listVal='$updateTodo' WHERE id='$updateId'";
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
    <title>UPDATE TODO</title>
</head>
<body>
    <div class="main">
        <div class="create-todo">
            <form action="update.php" method="POST">
                <h2>UPDATE TODO LIST</h2>
                <input type="text" name="updateTodo" value="<?php echo $editTodo ?>" />
                <br> <br>


                <input type="submit" name="update" value="UPDATE">

                <input type="hidden" name="updateId" value="<?php echo $editId ?>" />
            </form>
        </div>


     

    </div>    

</body>
</html>