<?php
class user{
    const name="darling"."<br>";
    public static function info(){
        echo"this is static <br>";
    }
}
echo user::info();
echo user::name;
// echo user:: $name="hello world"."<br>";

class m{
    public static $value=7332;

    public function staticValue(){
        return self::$value;
    }
    public static function show(){
        return"this is static method";
    }
    function applyStatic(){
        return self::show();
    }
}
$s=new m();
echo $s->staticValue();
echo $s->applyStatic();













?>