<?php 
class Chef{

function makeChicken(){
    echo " The Chef Make chicken <br>";
}


}

class ItalianChef extends Chef{
    function makeBuff(){
        echo " The Italian Chef Make buff <br>";
    } 
}
    $chef=new Chef();
    $chef->makeChicken();
    $ItalianChef=new ItalianChef();
    $ItalianChef->makeBuff();
    $ItalianChef->makeChicken();
?>