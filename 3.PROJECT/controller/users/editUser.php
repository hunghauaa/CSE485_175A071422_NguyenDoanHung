<?php
    require_once('../config.php');
    // echo "ket noi thanh cong";
    $firtName = $_POST['txtFirtName'];
    $lastName = $_POST['txtLastName'];
    $email = $_POST['txtEmail'];
    $role = $_POST['role'];
    $id =$_POST['id'];
    $sql = "UPDATE users SET firtname = '$firtName', lastname = '$lastName', email = '$email', role = '$role' WHERE id = '$id'";
    if(!empty($firtName) && !empty($lastName) && !empty($email)){
            $result = mysqli_query($conn,$sql);
            if($result){
                Header("Location:http://localhost/web/3.PROJECT/UI-detailUsers.php");
                }
            else die("<h1> Có lỗi xảy ra </h1>");
        }
    else die("<h1> Vui lòng điền đầy đủ thông tin </h1>");
?>