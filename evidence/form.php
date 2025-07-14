<?php
class Student {
    private $id;
    private $name;
    private $email;

    public function __construct($id, $name, $email) {
        $this->setId($id);
        $this->setName($name);
        $this->setEmail($email);
    }

    
    private function setId($id) {
        $id = trim($id);
        if (strlen($id) > 5) {
            throw new Exception("❌ ID must be max 5 characters.");
        }
        $this->id = $id;
    }

    private function setName($name) {
        $this->name = htmlspecialchars(trim($name));
    }

       private function setEmail($email) {
        $email = trim($email);
       
        if (!preg_match("/^[\w\-\.]+@[\w\-]+\.[a-z]{2,}$/i", $email)) {
            throw new Exception("❌ Invalid email format.");
        }
        $this->email = htmlspecialchars($email);
    }

  
    public function save($filename) {
        $line = "{$this->id},{$this->name},{$this->email}\n";
        file_put_contents($filename, $line, FILE_APPEND);
    }

   
    public static function display($filename) {
        if (!file_exists($filename)) {
            echo "<p>No students found.</p>";
            return;
        }
        $lines = file($filename, FILE_IGNORE_NEW_LINES);
        echo "<h3>📋 Registered Students:</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
        foreach ($lines as $line) {
            list($id, $name, $email) = explode(",", $line);
            echo "<tr>
                    <td>" . htmlspecialchars($id) . "</td>
                    <td>" . htmlspecialchars($name) . "</td>
                    <td>" . htmlspecialchars($email) . "</td>
                 </tr>";
        }
        echo "</table>";
    }
}
?>