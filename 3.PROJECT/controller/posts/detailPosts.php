<?php
    require_once('controller/config.php');
    // echo "ket noi thanh cong";
    if(isset($_GET)){
        $sql = "SELECT * FROM posts";
        $result = mysqli_query($conn,$sql);
    }
?>