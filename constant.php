<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>constant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    //constant are defined using PHP's define() function whic accept two arguments.
    //First arg is the name of the constant and second arg is it's value

    //Defining constant
    define("Name","Mohammad Hussain Sheikh");
    //using constant
    echo "Constant values is :".Name;
    ?>
</body>
</html>