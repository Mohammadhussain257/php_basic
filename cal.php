<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="cal.php" method="get">
<input type="number" name="num1"><br>
<input type="number" name="num2"><br>
<input type="submit">
</form>
<h1>Anser is :</h1> <h1><?php echo $_GET["num1"]+$_GET["num2"] ?></h1>
</body>
</html>