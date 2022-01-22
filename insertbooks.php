<?php


include 'db_conn.php';

$book_title=$_POST['BOOKTITLE'];
$author_name=$_POST['author_name'];
$publisher_name=$_POST['publisher_name'];
$genre=$_POST['genre'];
$description=$_POST['description'];

$qry = "INSERT INTO `books` (`book_title`, `author`, `publisher_name`, `genre`, `description`) VALUES ('$book_title','$author_name','$publisher_name','$genre','$description')";
$insert = mysqli_query($conn,$qry);
if(!$insert) {
    echo "there is a problem";

}
else{
    echo("<script>alert('book inserted')</script>");

}
?>