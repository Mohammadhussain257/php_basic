<?php 
class Book {

    var $title;
    var $author;
    var $pages;

    function __construct(){
        echo "New Book Created <br>";
    }
}

$book1=new Book;
$book1->title="Harry Potter <br>";
$book1->author="JK Rowling <br>";
$book1->pages=400;

echo $book1->title;
echo $book1->author;
echo $book1->pages;
?>