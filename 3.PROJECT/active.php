<?php
    if(isset($_GET['code'])){
        $code = $_GET['code'];
    }

    // B1: Ket noi Database Server
    // B1: Ket noi database Server;
    require_once("controller/config.php");
    // B2: Khai bao truy van
    $sql = "SELECT * FROM users WHERE activation_code = '$code'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $sql = "UPDATE users SET actived = '1' WHERE activation_code = '$code'";
        if(mysqli_query($conn,$sql)){
            header("Location: update-thanks.php");
            exit();
        }
    }



?>