<?php
    require './read.php';
    

    if(isset($_POST['addTodo'])){
        $timeDate = $_POST['timeDate'];
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
            <form action="create.php" method="POST">
                <h2>TODO LIST</h2>
                <input type="text" name="todo" id="todo" rows="5" column="10">
                <p type="hidden" class=timeDate name="todo" id="todo" rows="5" column="10">
            
                
                <input type="submit" name="addTodo" value="ADD">
               
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
                        <!-- <p class="setDate"><?php echo $timeDate?></p> -->

                        
                    </div>


                    <div>
                        <form action="#" method="POST">
                            <input type="submit" name="edit" value="EDIT">
                        </form>

                        <form action="#" method="POST">
                            <input type="submit" name="delete" value="DELETE">
                        </form>
                    </div>
                    

                </div>
                <?php }?>
                
            </div>
        </div>



    </div>

    <div class="new"></div>
   
    
</body>

<script> 
    // const timeDate = document.querySelector('.timeDate');
    // const setDate = document.querySelector('.setDate');

    // let dateTime = new Date();

    // timeDate.innerText = dateTime;
    // setDate.innerText = dateTime;
   
    


</script> 
</html>