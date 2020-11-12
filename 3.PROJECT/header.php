<!doctype html>
<html lang="en">
  <head>
    <title>Khoa Công nghệ thông tin - ĐHTL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
  <header class="set">
                <?php if (session_id()=='') session_start() ?>
                <div class="top-header">
                    <span class="top-header__hotline">Khoa Công nghệ thông tin - Trường Đại Học Thủy Lợi</span>
                    <div class="top-header__right">
                        <ul class="top-header__items">
                            <li class="top-header__item">Sinh Viên</li>
                            <li class="top-header__item">Giảng Viên</li>
                            <li class="top-header__item">Đào Tạo Quốc Tế</li>
                            <?php if (isset($_SESSION['name'])&&isset($_SESSION['role'])){ ?>
                                <li class="top-header__item"><a href="profile.php">Xin chào <?php echo $_SESSION['name'] ?></a></li>
                                <!-- <li class="top-header__item"></li> -->
                                <!-- <li class="top-header__item"></li> -->
                                <li class="nav-item dropdown top-header__item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://localhost/web/3.PROJECT/UI-detailUsers.php">Quản lý người dùng</a>
                                <a class="dropdown-item" href="http://localhost/web/3.PROJECT/UI-detailPosts.php">Quản lý bài viết</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"  href="controller/users/logout.php">Đăng Xuất</a>                                </div>
                            </li>
                                <!-- <li class="top-header__item"></li> -->

                            <?php }elseif (isset($_SESSION['name'])){ ?>
                                <li class="top-header__item"><a href="profile.php">Xin chào <?php echo $_SESSION['name'] ?></a></li>
                                <li class="top-header__item"><a href="controller/users/logout.php">Đăng Xuất</a></li>
                            <?php }else{?>
                                <li class="top-header__item"><a href="UI-login.php">Đăng Nhập</a></li>
                                <li class="top-header__item"><a href="UI-createUser.php">Đăng Ký</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="main-header ">
                    <div class="main-header__image">
                        <a href="index.php"><img src="image/logo1.jpg" alt="" width="130px" height="60px"></a>
                    </div>
                    <div class="main-header__right">
                        <ul class="main-header__items">
                            <li class="main-header__item"><i class="fa fa-info-circle"></i> giới thiệu</li>
                            <li class="main-header__item"><i class="fa fa-graduation-cap"></i> tuyển sinh</li>
                            <li class="main-header__item"><i class="fa fa-book"></i> đào tạo</li>
                            <li class="main-header__item"><i class="fa fa-bookmark"></i> nghiên cứu</li>
                            <li class="main-header__item"><i class="fas fa-handshake"></i> hợp tác doanh nghiệp</li>
                        </ul>
                    </div>
                </div>
                