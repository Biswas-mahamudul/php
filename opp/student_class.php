<?php
class Student {
    private $id;
    private $name;
    private $address;
    private $phone;
   private $email;
    private static $laltu="data.txt";

     function __construct($id, $name, $address, $phone, $email) {
        $this->id = trim($id);
        $this->name = htmlspecialchars(trim($name));
        $this->address = $address;
        $this->phone = $phone;
        $this->email = filter_var(trim($email), FILTER_VALIDATE_EMAIL); 
    }

    public static function authenticate($id, $email, $name, $address, $phone) {
        if (!file_exists(self::$laltu)) return false;
        // Add authentication logic here if needed
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