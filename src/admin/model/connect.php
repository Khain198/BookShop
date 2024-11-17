<?php
    function connectdb() {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=bookshop", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch(PDOException $e) {
            // echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
    }

    // Thực thi và trả về nhiều giá trị từ db
    function get_all($sql){
        $conn = connectdb();

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $stmt->fetchAll();
        $conn = null;

        return $arr;
    }

    // Thực thi và trả về 1 giá trị từ db
    function get_one($sql){
        $conn = connectdb();

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $stmt->fetch();
        $conn = null;

        return $arr;
    }

    function delete($sql){
        $conn = connectdb();
        $conn->exec($sql);
        $conn = null;
    }

    function update($sql){
        $conn = connectdb();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $conn = null;
    } 

    function insert($sql){
        $conn = connectdb();
        $conn->exec($sql);
        $conn = null;
    }
?>