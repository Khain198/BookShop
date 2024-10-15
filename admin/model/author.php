<?php
    function get_author(){
        $conn=connectdb();

        $sql="SELECT * FROM author";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arr=$stmt->fetchAll();
        return $arr;
    }
?>