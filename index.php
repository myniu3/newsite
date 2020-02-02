<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Primer - Index</title>
</head>
<body>
    <h2>Follow each link to the page example</h2>
    <ul>
        <li><a href="array.php">Simple Array and Printouts</a></li>
        <li><a href="forloop.php">Simple For Loop</a></li>
        <li><a href="downhileloop.php">Simple Do While</a></li>
        <li><a href="whiledowhileloop.php">Simple While/Do While Loop</a></li>
        <li><a href="ifstatement.php">Simple If Statement</a></li>
        <li><a href="switchstatement.php">Simple Switch Statement</a></li>
    </ul>
    <!-- Basic HTML -->
    <h1>Hello World - PHP Primer</h1>
    <br/>
      
    <?php
     //Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';

    ?>

    <?php 
        // declare variable
        $name = 'myniu';
        $age = '28';
        // eco variable
        echo $name;
        echo '<h1>My nickname is: '.$name.' </h1>';
        echo '<h1>My age is: '.$age.' </h1>';
        // Echo using double quotes 
        echo "<h1>My nickname is: $name</h1>"
    ?>

</body>
</html>