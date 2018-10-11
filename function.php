<?php
//Defining function
function test(){
    echo "Hello World";
}
//Calling function
test();
?>

<?php
//Function with argument
function disp($num1,$num2){
    $result=$num1+$num2;
    echo "<br>The sum of two number is :".$result;
}
disp(12,13);
?>
<?php
//Function with return type
function factor(int $num){
    $fact=1;
    for($i=1; $i<=$num;$i++){
        $fact*=$i;
    }
    return $fact;
}
$factorial=factor(10);
echo "<br>The Factorial is :".$factorial;
?>
<?php
//Recursive function
function recursive($number){
    if($number<2){
        return 1;
    }else{
        return ($number*recursive($number-1));
    }
}
$result=recursive(5);
echo "<br> Factor is :".$result;
?>