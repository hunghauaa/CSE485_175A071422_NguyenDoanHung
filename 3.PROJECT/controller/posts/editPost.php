<?php
    require_once('../config.php');
    // echo "ket noi thanh cong";
    $id = $_POST['id'];
    $title = $_POST['txtTitle'];
    $description = $_POST['txtDescription'];
    $content = $_POST['txtContent'];
    $published = $_POST['published'];

    $sql = "UPDATE posts SET title = '$title', description = '$description', content = '$content', published = '$published' WHERE id = '$id'";

    if(!empty($title) && !empty($description) && !empty($content)){
            $result = mysqli_query($conn,$sql);
            if($result){
                Header("Location:http://localhost/web/3.PROJECT/UI-detailPosts.php");
                }
            else die("<h1> Có lỗi xảy ra </h1>");
        }
    else die("<h1> Vui lòng điền đầy đủ thông tin </h1>");
?>