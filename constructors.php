<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constructors</title>
</head>
<body>
    <p> constructors also called as functions<p>
        <?php
         class Book{
            //customed datatypes
            var $title;
            var $author;
            var $pages;
        //creating cunstructor
        function __construct($aTitle, $aAuthor, $aPages){
        echo "New book created"."<br>"."<br>";
        //this is a keyword refer to current object
        $this ->title=$aTitle;
        $this ->author=$aAuthor;
        $this ->pages= $aPages;

        }
    }
    $book1= new Book("harry potter","JK Rowling",400);
    $book2= new Book("house of dragons","dwel chaden",350);

    echo $book1 ->title."<br>";
    echo $book1 ->author."<br>";
    echo $book1 ->pages."<br>";

        ?>
    
</body>
</html>