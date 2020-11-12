<?php
        $host = 'localhost';
        $users = 'root';
        $password = '';
        $db = 'acv';
        $conn = mysqli_connect($host, $users, $password, $db);
        if(!$conn) echo "khong the ket noi den db";
?>