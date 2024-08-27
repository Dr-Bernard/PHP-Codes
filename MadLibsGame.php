<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="MadLibsGame.php" method="get">
        Colour: <input type="text" name="colour"> <br>
        Plural Noun: <input type="text" name="pluralNoun"> <br>
        Celebrity: <input type="text" name="celebrity"> <br>
        <input type="submit">
    </form>
    <br><br>

    <?php
        
        /*echo "Roses are red <br>";
        echo "Violets are blue <br>";
        echo "I love you <br>";*/

        $colour = $_GET["colour"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $colour <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?>

</body>
</html>