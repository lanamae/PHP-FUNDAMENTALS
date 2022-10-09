<?php

    echo "<h1> PHP FUNDAMENTALS </h1>";
    echo "<hr>";

    // // 1.VARIABLES
    // echo "<h3>VARIABLES </h3>";

    // $name = "Lana Mae";
    // $age = 20;
    // $salary = 9999999.99;
    // $bool0 = false;
    // $bool1 = true;
    // $arr = ['a', 'b','c'];

    // echo "Name: $name <br>";
    // echo 'Age:'. $age ."<br>";
    // echo "Salary: $salary<br>";
    // echo "Boolean - False: $bool0 <br>";
    // echo "Boolean - True: $bool1 <br>";

    // echo "<hr>";

    // // 2. DISPLAYING
    // echo "<h3>DISPLAYING OR PRINTING</h3>";
    // echo "I am $name a $age year old Web Developer having the salary of $salary <br>";
    // echo 'I am ' .$name .' a ' .$age .' year old Web Developer having the salary of ' .$salary .'<br>' ;

    // print_r ("Index 0: ".$arr[0] ."<br>");
    // print_r ("Index 1: ".$arr[1] ."<br>");
    // print_r ("Index 2: ".$arr[2] ."<br>");

    // echo "<hr>";
    // // 3.DATATYPES
    // echo "<h3>DATATYPES</h3>";
    // var_dump($name);
    // echo "<br>";
    // var_dump($age);
    // echo "<br>";
    // var_dump($salary);
    // echo "<br>";
    // var_dump($bool0);
    // echo "<br>";
    // var_dump($bool1);
    // echo "<br>";
    // var_dump($arr);


    // echo "<hr>";

    // // 4. CONTANTS
    // echo "<h3>CONSTANT</h3>";

    // define('fullname', 'Lana Mae Pantanilla Galvez');
    // echo fullname . "<br>";

    //     //for arrays
    
    // define('fruits', [ 'first' => 'Apple', 'Banana', 'Lemon']);

    // print_r(fruits);
    // echo "<br>";
    
    // print_r(fruits['first']);
    // echo "<br>";
    // print_r (fruits[0]);

    // echo "<hr>";

    // // 5. OPERATORS
    // echo "<h3>OPERATORS</h3>";

    // $num1 = 3;
    // $num2 = 4;


    // echo "Addition: " .$num1+$num2;
    // echo "<br>";
    // echo "Subtraction: " .$num1 - $num2;
    // echo "<br>";
    // echo "Multiplication: " .$num1 * $num2;
    // echo "<br>";
    // echo "Division: " .$num1 / $num2;
    // echo "<br>";
    // echo "Modulus: ". $num1 % $num2;
    // echo "<br>";
    // echo "Power: " .$num1 ** $num2;

    // echo "<hr>";

    // // 6. FUNCTIONS
    // echo "<h3> FUNCTIONS </h3>";


    // function sayHi($firstName){
    //     echo "Hello $firstName";

    // }


    // sayHi("Lana Mae");

    // echo "<hr>";

    // //7.  ARRAYS;
    // echo "<h3>ARRAYS</h3>";
    // $colors = ['a' => 'red', 'green', 'blue'];

    // print_r ($colors);
    // echo "<br>";
    // print_r($colors['a']);
    // echo "<br>";
    // print($colors[1]);


    // echo "<hr>";

    // // 8. CONDITIONS
    // echo "<h3>CONDITIONS</h3>";

    // $num3 = 7;


    // echo '<h4>--IF ELSE-- </h4>';
    // echo "Number: $num3 <br>";

    // if($num3>=10){
    //     echo "The Number is greater than 9";
    // }

    // elseif($num3<10){
    //     echo "The Number is lower than 10";
    // }

    // else{
    //     echo "Invalid Number";
    // }


    // echo "<h4>SWICTCH</h4>";

    // switch($num3){
    //     case 9:
    //         echo "The Number  is not 10 <br>";break;

    //     case 10:
    //         echo "The Number is 10 <br>";break;

    //     default:
    //         echo "Invalid Number";
    // }

    // echo "<hr>";

    // // 9. LOOPS
    // echo "<h3>LOOPS</h3>";


    // $counter = 0 ; 

    // echo "<h4>WHILE LOOPS</h4>";
    // while($counter<=10){
    //     echo "Iloveyou $counter <br>";
    //     $counter++;
    // }

    
    // echo "<h4>DO WHILE</h4>";

    // $counterTwo = 0;
    // do{
    //     echo "I love you " .$counterTwo ."<br>";
    //     $counterTwo++;
    // }
    // while($counterTwo<=10);


    // echo "<h4>FOR LOOP</h4>";

    // $colorTwo = ['Yellow', 'Black', 'White', 'Gray'];

    // print_r($colorTwo);
    // echo "<br>";

    // for($i = 0; $i<count($colorTwo);$i++){
    //     echo "Colors: " .$colorTwo[$i] . "<br>";
    // }
    // echo "<hr>";
    

    // // 10. FORMS
    // echo "<h4>FORMS</h4>";

    //     if(isset($_POST['submit'])){
    //         $nameVal = $_POST['name'];
    //         $ageVal = $_POST['age'];

    //         echo "<br>";
    //         echo "Name:" .$nameVal;
    //         echo "<br>";
    //         echo "Age:" .$ageVal;
    //         echo "<br>";
    //         echo "<br>";
        

    //     }


        // 11. DATABASE
        echo  "<h3>DATABASE</h3>";

        // $host = 'localhost';
        // $user = 'root';
        // $password = '';
        // $database = 'php-basic';
    

        // $connection = mysqli_connect($host, $user, $password, $database);
        // $query = 'SELECT * FROM user';
        // $sqlUser = mysqli_query($connection, $query);

        // // while($results = mysqli_fetch_array($sqlUser)){
        // //     echo "Name: " .$results['name'] ."<br>";
        // //     echo "Age: " .$results['age'] . "<br> <br>";
        // // }

        // for($x = 1; $x<=mysqli_num_rows($sqlUser); $x++){
        //     $results = mysqli_fetch_array($sqlUser);
            
        //     echo "Name: " .$results['name'] ."<br>";
        //     echo "Age: " .$results['age'] ."<br>";
           
        // }


        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'php-basic';

        $conn =mysqli_connect($host, $user, $password, $database);
        $queryUser = 'SELECT * FROM user';
        $sqlUser = mysqli_query($conn, $queryUser);


        // while($results = mysqli_fetch_array($sqlUser)){
        //     echo "Name: " .$results['name'] ."<br>";
        //     echo "Age: " .$results['age'] ."<br> <br>";
        // }


        for($b = 1; $b<=mysqli_num_rows($sqlUser); $b++){
            $results = mysqli_fetch_array($sqlUser);
            echo "[Database]Name: " .$results['name'] ."<br>";
            echo "[Database]Age: " .$results['age'] ."<br> <br>";
        }




   


    

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <form action="index.php" method="post">

            <label>Name: </label>
            <input type="text" name="name" placeholder="Enter Your Name">
            <br><br>

            <label>Age: </label>
            <input type="text" name="age" placeholder="Enter Your Age">
            <br><br>

            <input type="submit" name="submit" value="Click">


        </form>
        
    </body>
    </html>