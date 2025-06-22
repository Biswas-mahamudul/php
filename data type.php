<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>data type</h1>
    <?php
    $a = "jirjir";
    // echo $a;
    var_dump($a);
    echo "<br>";
     $b= 2586;
      var_dump($b);
       echo "<br>";
     $c= 2586.7332;
      var_dump($c);
        echo "<br>";
     $d= false;
      var_dump($d);
         echo "<br>";
     $e= array("laltu","lallu","lal");
      var_dump($e);
      echo "<br>";
      echo"<h2>object</h2>";

      class Student {
        public $name;
        public $age;
        public $gender;

       public function __construct($name, $age, $gender) {
            $this->name = $name;
            $this->age = $age;
             $this->gender = $gender;
       }
    }
    $stu = new Student("Laltu",27,"male");
    var_dump($stu);
         


    ?>
</body>
</html>