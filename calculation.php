<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="calculation.php" method="post">
    First Number : <input type="number" name="num1"><br>
    Operator :<input type="text" name="op"><br>
    Second Number : <input type="number" name="num2">
    <input type="submit">
    </form>
    <?php 
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $OP=$_POST["op"];

    if($op=="+"){
        echo $num1+$num2;
    }elseif($op=="-"){
        echo $num1-$num2;
    }elseif($op=="*"){
        echo $num1*$num2;
    }elseif($op=="/"){
        echo $num1/$num2;   
    }else{
        echo "Invalid Operator";
    }
    ?>
</body>
</html>