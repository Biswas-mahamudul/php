<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $add = function($a,$b){
        return $a+$b;
    };
    echo $add(24,97);
    echo"<br>";

      echo"<h2> arrow function</h2>";

     $addArrow=fn($x,$y)=>$x+$y;

     echo$addArrow(9151,2586);
      echo"<br>";

      echo"<h3> string function</h3>";
      function name(){
        return strlen("MD MAHAMUDUL HASAN SIFAT");
      }
      echo name();
      echo"<br>";
      function nam(){
        return str_word_count("MD MAHAMUDUL HASAN SIFAT");
      }
      echo nam();
       echo"<br>";

      echo"<h3> NUMERIC function</h3>";
      function num(){
        echo is_numeric(28);
      };
      num();
      echo"<br>";
      function num2(){
        echo("Round: ".round(34.3541));
      }
      num2();
       echo"<br>";

       function num3(){
        echo("Random Number:".rand(2451,7777));
       }
       num3();




    ?>
</body>
</html>