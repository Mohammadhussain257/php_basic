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
    <form action="assoArrays.php" method="post">
    <input type="text" name="student">
    <input type="submit" value="Submit">
    </form>


    <?php 
    //Defines an associative array
    $grades=array("jim"=>"A+","karen"=>"B-","Oscar"=>"C+");
    echo $grades[$_POST["student"]];
    ?>

    <?php
    //Second method to create associative array which is equivalent to the avobe example
    $grade["Jim"]="A+";
    $grade["Karen"]="B-";
    $grade["Oscar"]="C=";
    //echo is use to give output but print_r is inbuilt function which is used to print array
    print_r($grade);
    ?>
</body>
</html>