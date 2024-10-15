<?php
    include_once "model/connect.php";
    // connectdb();
    include_once "model/author.php";
    $new_author=get_author();
    // echo var_dump($new_author);

    include_once "views/header.php";

    if(isset($_GET['pg'])&&($_GET['pg'] !="")){
        switch ($_GET['pg']) {
            case 'author':
                include_once "views/author.php";
                break;
            case 'book':
                # code...
                break;
            default:
                #require home
                break;
        }
    }else{
        include_once "views/home.php";
    }
    
    include_once "views/footer.php"
?>