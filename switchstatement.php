<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Statements</title>
</head>
<body>
    <h1>Switch Statemets</h1>
    <?php
        $grade = 'A';

        switch($grade){
            case 'A':
                echo '<h2>YOU ARE SUPERSTAR!</h2>';
                break; 
            case 'B':
                echo '<h2>YOU DID WELL!</h2>';
            break;
            default:
                echo '<h2>YOU HAVE FAILED</h2>';
            break; 
        }
    ?>
</body>
</html>