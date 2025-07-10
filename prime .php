<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="num" placeholder="Enter a number">
    <input type="submit" name="submit" value="Check Prime">
</form>

<?php
if (isset($_POST['submit'])) {
    $num = (int)$_POST['num'];
    if ($num < 2) {
        echo "Not a prime number: $num";
    } else {
        $isPrime = true;
        for ($i = 2; $i <$num; $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo "Prime number: $num";
        } else {
            echo "Not a prime number: $num";
        }
    }
}
?>
</body>
</html>