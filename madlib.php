<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="madlib.php" method="get">
    Color:<input type="text" name="color"><br>
    Plural Noun:<input type="text" name="pluralNoun"><br>
    celebrity :<input type="text" name="celebrity"><br>
    <input type="submit">
    </form>

    <?php 
    $color=$_GET["color"];
    $pluralNoune=$_GET["pluralNoun"];
    $celebrity=$_GET["celebrity"];

    echo "Roser are $color <br>";
    echo "$pluralNoune are blue <br>";
    echo "I love $celebrity <br>";
    
    
    ?>
</body>
</html>