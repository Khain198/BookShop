<?php
    function getBook($id){
        $sql = "SELECT * FROM book WHERE book_id=".$id;

        return get_one($sql);
    }

    function getBooks(){
        $sql = "SELECT * FROM book";

        return get_all($sql);
    }

    function addBook ($name, $price, $quantity, $img, $authorid){
        $sql="INSERT INTO book (book_name, book_price, book_number, book_img, author_id) 
            VALUES ('$name', '$price', '$quantity', '$img', '$authorid')";

        insert($sql);
    }

    function updateBook($name, $price, $quantity, $img, $authorid, $id){
        $sql="UPDATE book SET book_name='$name', book_price='$price', book_number='$quantity', 
            book_img='$img', author_id='$authorid' WHERE book_id=".$id;

        update($sql);
    }

    function deleteBook($id){
        $sql = "DELETE FROM book WHERE book_id = ".$id;

        delete($sql);
    }
?>