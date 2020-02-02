<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Primer - If Statements</title>
</head>
<body>
    <h3 style="color: red;"></h3>
    <?php 
        //An If statement that will carry out an action based on the value of the varuable.
        echo '<h2>If statement</h2>';

        $grade = 80;
        // ===, ==, >, <, <=, >=
        if($grade >= 50){
            echo '<h3 style="color: green;">YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red;">YOU HAVE FAILED</h3>';
        }
        $grade = "B";
        // If-Else IF-Else
        if($grade == 'A' ){
            echo '<h2>YOU ARE A SUPERSTAR!</h2>';
        }
        elseif ($grade == 'B'){
            echo '<h2>YOU DID WELL!</h2>';
        }
        else{
            echo '<h2>YOU HAVE FAILED...</h2>';
        }
    ?>
</body>
</html>