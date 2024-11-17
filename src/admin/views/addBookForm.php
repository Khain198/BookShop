
    <form action="index.php?pg=addBook" method="POST">
        <label for="">Tên sách: </label>
        <input type="text" name="name" id=""><br><br>
        <label for="">Giá sách: </label>
        <input type="text" name="price" id=""><br><br>
        <label for="">Số lượng: </label>
        <input type="text" name="quantity" id=""><br><br>
        <label for="">Tên hình: </label>
        <input type="text" name="img" id=""><br><br>
        <label for="">Tác giả: </label>
        <select id="" name="authorid">

            <?php
                $html = '';
                foreach ($authorList as $item) {
                    extract($item);
                    $html.='<option value="'.$author_id.'">'.$author_name.'</option>';
                }
                echo $html;
            ?>

        </select><br><br>
        <input type="submit" name="btnAddBook" value="Submit">
    </form>