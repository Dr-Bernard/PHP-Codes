<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="form.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <br>
        Place of origin: <input type="text" name="place">
        <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET["name"] ?>.
    <br>
    You are <?php echo $_GET["age"] ?> years old.
    <br>
    You hail from <?php echo $_GET["place"] ?>.

</body>
</html>