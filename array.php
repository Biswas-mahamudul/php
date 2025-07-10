<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php
    $arr=array(
        array(
            array(1,2),
            array(3,4),
        ),
        array(
            array(5,6),
            array(7,8),
        ),
    );
    print_r($arr);
    echo "<br>";


    $family= array(
        "child1"=>array(
        "name"=>"linus",
        "year"=>2011
        ),
         "child12"=>array(
        "name"=>"laltu",
        "year"=>2013
        ),
          "child3"=>array(
        "name"=>"jirjir",
        "year"=>2032
        ),
    );
    print_r($family);
    echo"<br>";
    
     echo"<h2>isset </h2>";
     $num=null;
     $num=15;
     if(!isset($num)){
        $r =$num+5;
        echo $r;
     } else{
        echo"false";
     }
   
    ?>
</body>
</html>