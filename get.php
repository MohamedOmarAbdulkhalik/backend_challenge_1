<?php

$name = isset($_GET['name']) && $_GET['name'] !== ''
    ? htmlspecialchars($_GET['name'])
    : 'Guest';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greeting</title>
</head>
<body>
    <h1>Hello, <?php echo $name; ?>!</h1>
</body>
</html>
