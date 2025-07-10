<?php
require_once("student_class.php");

if(isset($_POST["btnSubmit"])){

    $id=$_POST["txtid"];
    $name=$_POST["txtname"];
    $address=$_POST["txtaddress"];
    $phone=$_POST["txtphone"];
    $email=$_POST["txtemail"];

    $student = new Student($id, $name, $address, $phone, $email);
     $student->store();
     echo "Success!";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="txtid">ID:</label>
        <input type="text" name="txtid" id="txtid" required>
        <br>
        <br>
        <label for="txtname">Name:</label>
        <input type="text" name="txtname" id="txtname" required>
        <br>
        <br>
         <label for="txtaddress">Address:</label>
        <input type="text" name="txtaddress" id="txtaddress" required>
        <br>
        <br>
         <label for="txtphone">Phone:</label>
        <input type="text" name="txtphone" id="txtphone" required>
        <br>
        <br>
         <label for="txtemail">Email:</label>
        <input type="text" name="txtemail" id="txtemail" required>
        <br>
        <br>
        <input type="submit" name="btnSubmit" value="Submit">
    </form>
<?php
Student::showData();
?>
</body>

</html>