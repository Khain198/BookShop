<?php
    function getAuthor(){
        $sql = "SELECT * FROM author";

        return get_all($sql);
    }
?>