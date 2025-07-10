<?php
class Student {
    private $id;
    private $name;
    private $address;
    private $phone;
   private $email;
    private static $laltu="data.txt";

     function __construct($id, $name, $address, $phone, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function caught() {
        return $this->id . ", " . $this->name . " ," . $this-> address . ", " . $this->phone . ", " . $this->email .   PHP_EOL;
    }
    public function store() {
       file_put_contents(self::$laltu, $this->caught(), FILE_APPEND);
    }


 public static function showData(){
    $students = file(self::$laltu);
    echo "<b>id | name | address | phone | email</b><br>";
    foreach ($students as $d) {
        list($id, $name, $address,$phone,$email) = explode(",", trim($d));
        echo"$id | $name | $address | $phone | $email <br>";

    }

}
}

?>