<<!DOCTYPE html>
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
    <?php 
    $index=1;
    while($index<=5){
    echo "Inside $index while loop <br>";
    $index++;    
}

$count=6;
do{
    echo "Inside $count do while loop<br>";
    $count++;
}while($count<=5);

for($i=1; $i<=5; $i++){
    echo "inside $i for loop <br>";
}
    ?>
</body>
</html>