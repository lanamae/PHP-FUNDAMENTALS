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
            <form action="#" method="POST">
                <h2>CREATE ACCOUNT</h2>
                <label for="username">UserName: </label>
                <input type="text" name="username" id="username" placeholder="Enter your Username">
                <br> <br>

                <label for="password">Password: </label>
                <input type="text" name="password" id="password" placeholder="Enter your Password">
                <br><br>

                <input type="submit" name="create" value="CREATE">


            </form>
        </div>


        <hr>

        <div class="read-main">
        <table border="collapsed">
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>ACTIONS</th>
            </tr>
            
            <tr>
                <td>SAMPLE ID</td>
                <td>SAMPLE USERNAME</td>
                <td>SAMPLE PASSWORD</td>
                <td>
                    <form action="#" method="#">
                        <input type="submit" name="edit" value="EDIT">
                    </form> 
                    
                    <form action="#" method="#">
                        <input type="submit" name="deleter" value="DELETE">
                    </form>
                </td>
                    
                


            </tr>


        </table>


        </div>


    </div>    

</body>
</html>