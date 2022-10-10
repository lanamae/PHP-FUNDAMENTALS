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
            <form action="#" method="POST">
                <h2>TODO LIST</h2>
                <input type="text" name="todo" id="todo" rows="5" column="10">
                <p>Date: </p>
                <p>Time: </p>
                <input type="submit" name="addTodo" value="ADD">
            </form>

            
        
            

        </div>

        <hr>

        <div class="todoList">
            <table>
                <tr class="indiList">
                    <td>
                        <input type="checkbox" name="check" class="check">
                        <span class="list">Sample to do list</span>
                        <p>created on October 10, 2022</p>

                        
                    </td>


                    <td>
                        <form action="#" method="POST">
                            <input type="submit" name="edit" value="EDIT">
                        </form>

                        <form action="#" method="POST">
                            <input type="submit" name="delete" value="DELETE">
                        </form>
                    </td>
                    

                </tr>

                
            </table>
        </div>



    </div>

    <div class="new"></div>
   
    
</body>
</html>