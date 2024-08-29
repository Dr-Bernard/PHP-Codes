<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="urlParameter.php" method="get"> 
        Name: <input type="text" name="name"> <br>
        <input type="submit"> 
    </form>
    <br><br>

    <?php
        echo $_GET['name'];
    ?>
</body>
</html>

/* URL PARAMETER aka URL VALUE aka URL VARIABLE: 
A url parameter is basically just a value that we can tack on to the end of one of our urls which will essentially pass a value into our php programming and we can access it. */

