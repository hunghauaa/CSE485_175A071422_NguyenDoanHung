<?php
    // Kiem tra
    $errors = array();
    $email = $_POST['txtEmail'];
	if (empty($email)) {
		$errors[] = 'You forgot to enter your email address.';
    }

    $password = $_POST['txtPassword'];

	
	if (empty($password)) {	
			$errors[] = 'Your two password did not match.';
	} 
    // Kiem tra Error:
    if (empty($errors)){
        // B1: Ket noi database Server;
            require_once('../config.php');
        // B2: Khai bao cau truy van
        $sql = "SELECT * FROM users WHERE email='$email' AND actived = 1";
        // echo $sql;
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            // print_r($row);
            $password_hash = $row['password'];
            if(password_verify($_POST['txtPassword'],$password_hash)){
                session_start();
                $_SESSION['name'] = $row['firtname'];
                if($row['role'] == 'Admin'){
                    $_SESSION['role'] = $row['role'];
                }

                Header("Location:http://localhost/web/3.PROJECT/");
            }else{
                echo "Chưa khớp";
            }
        }else{
            echo ".....";
        }

    }else{
        // Co loi, hien thi lai loi cho nguoi dung biet
        echo "Co loi nhap lieu ...";
    }
?>