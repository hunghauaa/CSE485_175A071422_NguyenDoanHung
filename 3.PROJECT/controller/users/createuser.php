<?php
    require_once('../config.php');
    // echo "ket noi thanh cong";
    $firtName = $_POST['txtFirtName'];
    $lastName = $_POST['txtLastName'];
    $email = $_POST['txtEmail'];
    $password1 = $_POST['txtPassword1'];
    $password2 = $_POST['txtPassword2'];
    $password_hash = password_hash($password1, PASSWORD_DEFAULT);
    $checkUnique = "SELECT * FROM users WHERE email = '$email'";
    $activation_code = substr(md5(uniqid(rand(), true)), 16, 16);
    $sql = "INSERT INTO users (firtname, lastname, email, password,activation_code) VALUES ('$firtName','$lastName', '$email', '$password_hash', '$activation_code')";
    if(!empty($firtName) && !empty($lastName) && !empty($email) && !empty($password1) && !empty($password2)){
        $check = mysqli_query($conn,$checkUnique);
        $num_Rows = mysqli_num_rows($check);
        if(mysqli_num_rows($check)!=0) die("email da duoc dang ky");
        if($password1 == $password2){
            $result = mysqli_query($conn,$sql);
            if($result){
                    require_once("../../contact.php");
                    $m = new sendMail();
                    $to = $email;
                    $tieudethu = "Liên hệ từ ĐHTL".$activation_code;  
                    $noidungthu = "Chao mung ban den voi trang Web cua toi. De kich hoat tai khoan, 
                    vui long truy cap duong link duoi day";        
                    $noidungthu .= '<a href="http://localhost/web/3.PROJECT/active.php?code='.$activation_code.'">Click Here</a>';
                     
                    //dùng mail test, đừng dùng mail chính thức
                    $from = "hungnguyen152699@gmail.com";
                    //pass email gmail
                    $p = "anhhung123"; //thay_mat_khau_cua_ban_vao_day
                    $error = '';
                    $m -> sendMailFromLocalhost($to, $from, $tennguoigui="ĐHTL", $tieudethu, $noidungthu, $from, $p, $error);
                    if( $error != '' ) {
                        die("Có lỗi khi gửi mail");
                    }else {
                        echo "Vui lòng đăng nhập vào mail để xác nhận tài khoản!";
                    }
    
                }
                else die("<h1> Có lỗi xảy ra </h1>");
            }
            else die("<h1> Password không khớp,vui lòng nhập lại ! </h1>");
        }
    else die("<h1> Vui lòng điền đầy đủ thông tin </h1>");
?>