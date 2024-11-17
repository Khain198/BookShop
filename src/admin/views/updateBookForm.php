
<?php
    $html = '';
    extract($book);
    $html.='<form action="index.php?pg=updateBook&id='.$book_id.'" method="POST">
                <label for="">Tên sách: </label>
                <input type="text" name="name" value="'.$book_name.'"><br><br>
                <label for="">Giá sách: </label>
                <input type="text" name="price" value="'.$book_price.'"><br><br>
                <label for="">Số lượng: </label>
                <input type="text" name="quantity" value="'.$book_number.'"><br><br>
                <label for="">Tên hình: </label>
                <input type="text" name="img" value="'.$book_img.'"><br><br>
                <label for="">Tác giả: </label>
                <select value="" name="authorid">';
    foreach ($authorList as $item) {
        extract($item);
        $html.='<option value="'.$author_id.'">'.$author_name.'</option>';
    }
    echo $html;
?>
        </select><br><br>
        <input type="submit" placeholder="" name="btnUpdateBook" value="Submit">
</form>