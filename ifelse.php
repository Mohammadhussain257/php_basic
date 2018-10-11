<?php
$today=Date("D");
if($today=="Sat"){
    echo "Enjoy Weekend <br>";
}else{
    echo "Have a good day <br>";
}
echo "Today is :".$today."<br>";
?>

<?php
$today=Date("D");
if($today=="Sun"){
    echo "Today is :".$today;
}elseif($today=="Mon"){
    echo "Today is :".$today;
}elseif($today=="Tue"){
    echo "Today is :".$today;
}elseif($today=="Wed"){
    echo "Today is :".$today;
}elseif($today=="Thu"){
    echo "Today is :".$today;
}elseif($today=="Fri"){
    echo "Today is :".$today;
}elseif($today=="Sat"){
    echo "Today is :".$today;
}else{
    echo "No Match Found.";
}
?>

<?php
//Ternary operator
$age=17;
echo ($age<18) ? '<br> Child':'<br> Adult';
?>

<?php
//Equivalent to ternary operator
$age=18;
if($age==18){
    echo '<br>Adult';
}else{
    echo '<br>Child';
}
?>