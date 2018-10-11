<?php 
$isMale=true;
if($isMale){
    echo "You are male";
}else{
    echo "You are not a male";
}

function getMax($num1,$num2){
    if($num1>$num2){
        return $num1;
    }else{
        return $num2;
    }
}
echo getMax(90,45);

function getMaximum($num1,$num2,$num3){
    if($num1>=$num2 && $num1>=$num3){
        return $num1;
    }else if($num2>=$num1 && $num2>=$num3){
        return $num2;
    }else {
        return $num3;
    }
}
echo getMaximum(90,45,100);
?>