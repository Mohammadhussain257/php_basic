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
<form action="switch.php" method="post">
 Insert Your Grade :<input type="text" name="grade"><br>
    <input type="submit">
</form>
    <?php 
    $grade=$_POST["grade"];
    switch($grade){
        case "A":
        echo "You did amazing";
        break;
        case "B":
        echo "you did pretty good";
        break;
        default:
        echo "Invalid grade";
    }
    ?>
</body>
</html>