<div class="body">
        <!-- OPTION CHUYỂN HƯỚNG -->
        <div class="otp">
            <label for="tables">Bảng: </label>
            <select name="" id="tables">
                <option value="book">Book</option>
                <option value="author">Author</option>
                <option value="abc">Abc</option>
                <option value="def">Def</option>
            </select>
        </div>
        <!-- Ô TÌM KIẾM -->
        <input type="search" name="" id="" placeholder="Tìm Kiếm">
        <input type="submit" value="Submit">
        <!-- THÊM SÁCH -->
        <a href="index.php?pg=addBookForm">Thêm</a>
<div class="body">
        <table class="center">
            <tr>
                <th>ID sách</th>
                <th>Tên sách</th>
                <th>Giá sách</th>
                <th>Số lượng</th>
                <th>Chỉnh sửa</th>
                <th>Xóa</th>
            </tr>
            
            <?php
                $html = "";
                foreach ($bookList as $item) {
                    extract($item);
                    $link_update = 'index.php?pg=updateBookForm&id='.$book_id;
                    $link_del = 'index.php?pg=deleteBook&id='.$book_id;
                    $html.= '<tr>
                                <td>'.$book_id.'</td>
                                <td>'.$book_name.'</td>
                                <td>'.$book_price.'</td>
                                <td>'.$book_number.'</td>
                                <td><a href='.$link_update.'>Chỉnh sửa</a></td>
                                <td><a href='.$link_del.'>Xóa</a></td>
                            </tr>';
                }
                echo $html;
            ?>
        </table>
