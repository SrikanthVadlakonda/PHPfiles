<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class</title>
</head>
<body>
    <h2>creating class and objects</h2>
    <?php

    //this is a class with the name book
    class Book {
        //customed datatypes
        var $title;
        var $author;
        var $pages;
    }
    //here new book is called object and objects coontains variables
    $book1=new Book;
    $book1 ->title= "pirates of carebian";
    $book1 ->author="Jhony deep";
    $book1->pages=400;
    echo "book is a class"."<br>";
    echo "new book is an object"."<br>";

    echo $book1->title."<br>";

    $book2=new Book;
    $book2 ->title= "find out dreams";
    $book2 ->author="lucan michel";
    $book2->pages=700;
    echo $book2->pages."<br>";

    $book3=new Book;
    $book3 ->title= "be postive with patiance";
    $book3 ->author="dwelling rob";
    $book3->pages=350;
    echo $book3->author."<br>";
    ?>
    
</body>
</html>