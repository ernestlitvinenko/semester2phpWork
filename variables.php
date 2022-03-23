<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = 10;
        $b = False;
        $c = 33;
        // a + b = c
        if ($a === False) {
            echo 'x + ' . $b . ' = ' . $c.'<br/>';
            echo 'x = '. ($c - $b);
        }
        else if ($b === False) {
            echo $a . ' + x' . ' = ' . $c .'<br/>';
            echo 'x = '. ($c - $a);  
        }
        else {
            echo $a . ' + ' . $b . ' = x'.'<br/>';
            echo 'x = '. ($a + $b);  
        }
    ?>
</body>
</html>