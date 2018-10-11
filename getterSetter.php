<?php 
class Movie{

    private $title;
    private $rating;
    function __construct($title,$rating){
    $this->title=$title;
    $this->rating=$rating;
    }
    function getTitle(){
    return $this->title;
    }
    function setTitle($title){
        $this->title=$title;
    }
}
    $movie1=new Movie("Avengers","PG-13");
    $movie1->setTitle("Misssion Fall Out");
    echo $movie1->getTitle(); 
?>