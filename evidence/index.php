

<?php
require_once 'form.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    try {
        $student = new Student($id, $name, $email);
        $student->save('store.txt');
        $message = "✅ Registration successful!";
    } catch (Exception $e) {
        $message = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
 
</head>
<body>
<div class="container">
    <h2>📄 Student Registration</h2>

    <?php if ($message) echo "<div class='msg'>" . htmlspecialchars($message) . "</div>"; ?>

    <form method="POST">
        <input type="text" name="id" placeholder="Student ID (max 5 chars)" required><br><br>
        <input type="text" name="name" placeholder="Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <button type="submit">Register</button>
    </form>

    <?php Student::display('store.txt'); ?>
</div>
</body>
</html>


