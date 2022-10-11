<?php
    require './read.php';
   


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
            <form action="create.php" method="POST">
                <h2>TODO LIST</h2>
                <input type="text" name="todo" id="todo" rows="5" column="10">
               
            
                
                <input type="submit" class="addbtn" name="addTodo" value="ADD">
               
            </form>

            
        
            

        </div>

        <hr>

        <div class="todoList">
            <div class='table'>

                <?php

                while($results = mysqli_fetch_array($sqlRead)){ ?>

           
                <div class="indiList">
                    <div>
                        <input type="checkbox" name="check" class="check">
                        <span class="list"><?php echo $results['listVal'] ?> </span>
                        

                        
                    </div>


                    <div class="actions">
                        <form action="update.php" method="POST">
                            <input type="submit" class="editbtn" name="edit" value="EDIT">
                            <input type="hidden" name="editTodo" value="<?php echo $results['listVal'] ?>">
                            <input type="hidden" name="editId" value="<?php echo $results['id']?>" />
                        
                        </form>

                        <form action="delete.php" method="POST">
                            <input type="submit" class="deletebtn" name="delete" value="DELETE">
                            <input type="hidden" name="deleteId" value="<?php echo $results['id'] ?>">
                        </form>
                    </div>
                    

                </div>
                <?php }?>
                
            </div>
        </div>



    </div>

    <div class="update">


    <!-- <div class="update-todo">
            <form action="update.php" method="POST">
                <h2>UPDATE TODO LIST</h2>
                <input type="text" name="updatetodo" id="todo" value=<?php echo $editTodo ?> />
                <input type="hidden" name="updateId" value="<?php echo $editId ?>" />
                
                <p type="hidden" class=timeDate name="todo" id="todo" rows="5" column="10">
            
                
                <input type="submit" name="addTodo" value="ADD">
               
            </form>

            
        
            

        </div>
    </div> -->
   
    
</body>

<script> 
    // const timeDate = document.querySelector('.timeDate');
    // const setDate = document.querySelector('.setDate');

    // let dateTime = new Date();

    // timeDate.innerText = dateTime;
    // setDate.innerText = dateTime;
   
    


</script> 
</html>