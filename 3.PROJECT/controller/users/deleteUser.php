<?php
    session_start();
    if(!isset($_SESSION['name'])){
        Header("Location:http://localhost/web/3.PROJECT/UI-login.php");
    }
    if(isset($_GET)){
        require_once('../config.php');
        $id = $_GET['id'];
        if($_SESSION['role'] == 'Admin')
        $sql = "DELETE FROM users WHERE id = '$id'";
        else die("Bạn không có quyền xóa");
        if(mysqli_query($conn,$sql)){
            Header("Location:http://localhost/web/3.PROJECT/UI-detailUsers.php");
        }else echo "Có lỗi xảy ra";
    }
?>