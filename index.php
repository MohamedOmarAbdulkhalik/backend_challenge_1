<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        echo "Today Date: " . date("Y-m-d");
        echo "<br>";
        echo "Time: " . date("H:i:s");
        ?>
    </h1>
    <br>
    <form method="post" action="result.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="">
        <br>
        <label for="color">Favorate color</label>
        <input type="text" name="color" id="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>