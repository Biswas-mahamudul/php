<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>local variable</h1>
    <?php
    function info(){
        $x=91;
        $x++;
        echo $x;
    }
    info();
    echo "<br>";
    echo"<h2> super global variable</h2>";

    echo $_SERVER['SERVER_PORT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_FILENAME'];
     echo "<br>";
    echo $_SERVER['SERVER_NAME'];
     echo "<br>";

     echo"<h3>  global SCOPE</h3>";
    $a=10;
    $b=102;
    function sum(){
        global $a,$b,$c;
        $c=$a+$b;
       
    }
    sum();
     echo $c;
       





    ?>
</body>
</html>