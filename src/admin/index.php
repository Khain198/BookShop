<?php
    include_once "model/connect.php";
    include_once "model/author.php";
    include_once "model/book.php";

    include_once "views/header.php";

    if(isset($_GET['pg'])&&($_GET['pg'] !="")){
        switch ($_GET['pg']) {
            // AUTHOR
            case 'author':
                $authorList = getAuthor();
                include_once "views/author.php";
                break;
            // BOOK
            case 'book':
                $bookList = getBooks();
                include_once "views/home.php";
                break;
            case 'addBookForm':
                $authorList = getAuthor();
                include_once "views/addBookForm.php";
                break;
            case 'addBook':
                if(isset($_POST['btnAddBook'])){
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $quantity = $_POST['quantity'];
                    $img = $_POST['img'];
                    $authorid = $_POST['authorid'];
                    // echo $name;
                    addBook($name, $price, $quantity, $img, $authorid);
                }
                $bookList = getBooks();
                include_once "views/home.php";
                break;
            case 'updateBookForm':
                if(isset($_GET['id']) && ($_GET['id']) > 0){
                    $id = $_GET['id'];
                    $book = getBook($id);
                    $authorList = getAuthor();
                    // echo var_dump($book);
                    include_once "views/updateBookForm.php";
                }
                break;
            case 'updateBook':
                if(isset($_GET['id']) && ($_GET['id']) > 0){
                    $id = $_GET['id'];
                }
                if(isset($_POST['btnUpdateBook'])){
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $quantity = $_POST['quantity'];
                    $img = $_POST['img'];
                    $authorid = $_POST['authorid'];
                    updateBook($name, $price, $quantity, $img, $authorid, $id);
                }
                $bookList = getBooks();
                include_once "views/home.php";
                break;
            case 'deleteBook':
                if(isset($_GET['id']) && ($_GET['id']) > 0){
                    $id = $_GET['id'];
                    deleteBook($id);
                }
                $bookList = getBooks();
                include_once "views/home.php";
                break;
            default:
                $bookList = getBooks();
                include_once "views/home.php";
                break;
        }
    }else{
        $bookList = getBooks();
        include_once "views/home.php";
    }
    
    include_once "views/footer.php";
?>