<?php
    include('header.php');
?>
<?php
    include('slideshow.php');
?>
<?php
    if (session_id() == '') {
        session_start();
    }
    require_once('controller/config.php');
    $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 0,3";
    $result = mysqli_query($conn,$sql);
?>
<!-- newspaper -->
<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h2>Tin Tức</h2>
                <span class="mb-3" style="width: 40px; height: 2px; background: #aa914d;display:block;"></span>
                <div class="content-news">
                    <!-- <div class="container"> -->
                    <div class="row mb-3 w-100">
                        <!--  -->
                        <?php  while($row = mysqli_fetch_assoc($result)){ ?>
                            <div class="col-sm-4">
                                <div class="card w-100 h-100">
                                    <img src="<?php echo $row['image'] ?>" class="card-img-top" width="250px" height="150px">
                                    <div class="card-body pt-0 pl-2">
                                        <h5 class="card-title" style="font-style: 16px;"></h5> <a href="postdetail.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h5>
                                        <p class="card-text mt-2" style="font-size: 13px;"><?php echo $row['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!--  -->

                    </div>
                    <div class="row">
                        <div class="col-9 more">
                            <a href="#" class="mr-0"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                        </div>
                    </div>

                </div>

            </div>


            <div class="col-sm-3">
                <h2>Media</h2>
                <span class="mb-3" style="width: 40px; height: 2px; background: #aa914d;display:block;"></span>
                <div class="video">
                    <div class="img-container">
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/v7gvVs9PqjE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    </div>
                    <br>
                    <ul class="list-news">
                        <li><a href="#"><i class="fa fa-angle-right"></i>Giới thiệu ngành kỹ thuật phần mềm</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>ĐH Thủy Lợi - 60 năm dấu ấn một
                                chặng đường</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>ĐH Thủy Lợi - 60 năm dấu ấn một
                                chặng đường</a></li>
                    </ul>
                    <div class="seemore-right my-4">
                        <a href="#"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- end newspaper -->

<div class="container mb-5 py-5" style="background: #024282;">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-4">
                        <div class="card pt-5 border-0" style="background: url(http://ntt.edu.vn/web/upload/images/hp_doanhnghiep-01.svg) no-repeat top/50%">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center" style="font-size: 24px;">Chuẩn 3 sao QS-Stars (Anh Quốc)</h5>
                                <p class="card-text text-white text-center">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card pt-5 border-0" style="background: url(http://ntt.edu.vn/web/upload/images/hp_nguoithay-01.svg) no-repeat top/50%">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center" style="font-size: 24px;">Đạt chuẩn chất lượng quốc gia</h5>
                                <p class="card-text text-white text-center">Là trường đại học ngoài công lập đầu tiên tại TP>HCM được kiểm định đạt chất lượng theo bộ tiêu chí quốc gia do Bộ GD&ĐT ban hành.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card pt-5 border-0" style="background: url(http://ntt.edu.vn/web/upload/images/hp_nhatruong-01.svg) no-repeat top/50%">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center" style="font-size: 24px;">Đại học hạnh phúc</h5>
                                <p class="card-text text-white text-center">Đại học Thủy Lợi là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-4">
                        <div class="card pt-5 border-0" style="background: url(http://ntt.edu.vn/web/upload/images/hp_sinhvien-01.svg) no-repeat top/50%">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center" style="font-size: 24px;">Chuẩn 3 sao QS-Stars (Anh Quốc)</h5>
                                <p class="card-text text-white text-center">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card pt-5 border-0" style="background: url(http://ntt.edu.vn/web/upload/images/hp_xhoi-01.svg) no-repeat top/50%">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center" style="font-size: 24px;">Chuẩn 3 sao QS-Stars (Anh Quốc)</h5>
                                <p class="card-text text-white text-center">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card pt-5 border-0" style="background: url(http://ntt.edu.vn/web/upload/images/hp_doanhnghiep-01.svg) no-repeat top/50%">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center" style="font-size: 24px;">Chuẩn 3 sao QS-Stars (Anh Quốc)</h5>
                                <p class="card-text text-white text-center">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev justify-content-start" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next justify-content-end" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="row my-4">
    <div class="container">
        <div class="row">

            <div class="col-4">
                <h3 class="lead mb-1">Hợp tác quốc tế</h3>
                <span class="mb-3" style="width: 80px; height: 2px; background: #aa914d;display:block;"></span>
                <div class="card border-0" style="width: 18rem;">
                    <img class="card-img-top img-fluid" style="height: 180px;" src="http://www.tlu.edu.vn/Portals/0/2020/HTQT/0k4a9757.JPG">
                    <div class="card-body px-0">
                        <h5 class="card-title" style="font-size: 18px;">Trường ĐH Thủy lợi tổ chức lễ ký kết trực tuyến Biên bản ghi nhớ với ĐH Keimyung, Hàn Quốc</h5>
                        <p class="card-text" style="font-size: 13px;">(TLU) – Ngày 22/10/2020, lần đầu tiên Trường ĐH Thủy lợi tổ chức Lễ ký kết Biên bản ghi nhớ trực tuyến với ĐH Keimyung, Hàn Quốc</p>
                    </div>
                    <div class="more">
                        <a href="#" class="mr-0"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <h3 class="lead mb-1">Môi trường học tập</h3>
                <span class="mb-3" style="width: 80px; height: 2px; background: #aa914d;display:block;"></span>
                <div class="card border-0" style="width: 18rem;">
                    <img class="card-img-top img-fluid" style="height: 180px;" src="http://cse.tlu.edu.vn/Portals/0/Images/2016/f4.jpg?ver=2016-11-23-145003-203">
                    <div class="card-body px-0">
                        <h5 class="card-title" style="font-size: 18px;">Trao học bổng và chứng chỉ cho học viên lớp CNTT Fsoft</h5>
                        <p class="card-text" style="font-size: 13px;">Ngày 22/11, tại Văn phòng Khoa Công nghệ Thông tin (P301- C1) đã diễn ra buổi Tổng kết khóa học CNTT ngắn hạn do Công ty Fsoft (Thuộc tập đoàn FPT) phối hợp với Khoa Công nghệ Thông tin tổ chức</p>
                    </div>
                    <div class="more">
                        <a href="#" class="mr-0"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <h3 class="lead mb-1">Sự kiện nổi bật</h3>
                <span class="mb-3" style="width: 80px; height: 2px; background: #aa914d;display:block;"></span>
                <div class="card border-0 my-3" style="">
                    <div class="row align-items-center">
                        <div class="col-3 text-center" style="background: #024282; color:white; font-size: 30px;">
                            Oct <br> 10
                        </div>
                        <div class="col-9">
                            <div class="card-body py-0">
                                <h5 class="card-title" style="font-size: 16px; font-weight: 600;">Ngày Doanh nhân Việt Nam và Đại hội CLB Doanh nghiệp Trường Đại học Thủy Lợi</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 my-3" style="">
                    <div class="row align-items-center">
                        <div class="col-3 text-center" style="background: #024282; color:white; font-size: 30px;">
                            Oct <br> 10
                        </div>
                        <div class="col-9">
                            <div class="card-body py-0">
                                <h5 class="card-title" style="font-size: 16px; font-weight: 600;">Ngày Doanh nhân Việt Nam và Đại hội CLB Doanh nghiệp Trường Đại học Thủy Lợi</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 my-3" style="">
                    <div class="row align-items-center">
                        <div class="col-3 text-center" style="background: #024282; color:white; font-size: 30px;">
                            Oct <br> 10
                        </div>
                        <div class="col-9">
                            <div class="card-body py-0">
                                <h5 class="card-title" style="font-size: 16px; font-weight: 600;">Ngày Doanh nhân Việt Nam và Đại hội CLB Doanh nghiệp Trường Đại học Thủy Lợi</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<?php
    include('footer.php');
?>