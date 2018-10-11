<?php
$Color=array("Green","Blue","Red","Yellow","purple","Black","White");
$position=array("First"=>1,"Third"=>3,"Second"=>2);
$number=array(1,2,3.5,9,8.5,7);
sort($Color);//For sorting index array
asort($position);//For sorting associative array by value
rsort($number);//For sorting associative array by key value
print_r($Color);
print_r($position);
print_r($number);
?>