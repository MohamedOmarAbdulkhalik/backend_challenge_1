<?php

declare(strict_types=1);

$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Guest';
$color = isset($_POST['color']) ? htmlspecialchars($_POST['color']) : 'Unknown';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
</head>
<body>
    <h1>Hello, <?php echo $name; ?>!</h1>
    <p>
        Your favorite color is: 
        <span style="color: <?php echo $color; ?>;">
            <?php echo $color; ?>
        </span>
    </p>
</body>
</html>
