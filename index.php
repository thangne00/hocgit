<?php
    session_start();
    if (isset($_SERVER['HTTP_REFERER'])) {
        $_SESSION['pre'] = $_SERVER['HTTP_REFERER'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cinema - Trang chủ</title>
    <meta charset="utf-8">
    <script src="myscript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/owl.carousel.min.css" type="text/css">


    <style>
        body {
            background-image: url();
        }
    </style>
</head>
<body>
    <!-- Thanh menu-->
    <nav style="background-color: #fff7eb;" class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container"><a href="index.php" class="navbar-brand d-flex align-items-center"> <i class="fa fa-snowflake-o fa-lg text-primary mr-2"></i><strong>CINEMA</strong></a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <?php 
                    if (!isset($_SESSION["login_id"])) {
                ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="login.php" class="nav-link"> ĐĂNG NHẬP </a></li>
                    <li class="nav-item active"><a href="REGISTER.php" class="nav-link"> ĐĂNG KÝ </a></li>
                </ul>

                <?php
                    }
                    elseif (isset($_SESSION["login_id"])) {
                       
                ?>
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link"> XIN CHÀO <?= mb_strtoupper($_SESSION["login_username"]) ?> ! </a></li>
                    <li class="nav-item active"><a href="change_password.php" class="nav-link"> ĐỔI MẬT KHẨU </a></li>
                    <li class="nav-item active"><a href="logout.php" class="nav-link"> ĐĂNG XUẤT</a></li>
                </ul>
                <?php } ?>
                
            </div>
        </div>
    </nav>
    <!-- Kết thúc menu-->

    <!-- Thanh header chức năng -->
    <header class="header-section">
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <span>Phim Mới</span>
                        <ul class="depart-hover">
                        <li><a href="listmovie.php?type=1">Đang chiếu</a></li>
                        <li><a href="listmovie.php?type=0">Sắp chiếu</a></li>
                        </ul>
                    </div>
                </div>
                <div class="nav-depart">
                    <div class="depart-btn">
                        <span>Cụm Rạp</span>
                        <ul class="depart-hover">
                        <li>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="myticket.php">Vé Của Tôi</a></li>
                        <li><a >Ưu đãi</a></li>
                        <li><a >Liên hệ</a></li>
                        <li><a >Giới thiệu</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap">

                </div>
            </div>
        </div>

    </header>

    <!-- Thêm các banner quảng cáo -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="images/banner0.jpg">
        </div>
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="images/banner1.jpg">
        </div>
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="images/banner4.jpg">
        </div>
    </section>

    <!-- Phim -->
    <div class="bg-white py-5">

    <!--Mục phim đang chiếu -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="images/hanh_phuc_mau.jpg">
                        
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Phim đang chiếu</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">

                    <?php 
                        include'./config.php';
                        
                        //Lấy dữ liệu phim đang chiếu
                        $sql = "SELECT * FROM movie where TrangThai = 1";
                        $result = $conn->query($sql);


                        while($tmp = $result->fetch_assoc()) {
                            echo "<form action=\"detail.php\" method=\"GET\">";
                            $url = "images/" . $tmp['Poster'];
                            
                            echo "<div class=\"product-item\">";
                            echo "<div class=\"pi-pic\">";
                            echo "<a href=\"\" ><img src={$url} alt=\"\"></a>";
                            if ($tmp['DoTuoi'] == 0) {
                                echo "<div class=\"saleP\">P</div>"; 
                            }
                            else if ($tmp['DoTuoi'] == 18) {
                                echo "<div class=\"sale18\">C18</div>"; 
                            }
                            else {
                                $rated = "C" . $tmp['DoTuoi'];
                                echo "<div class=\"sale13\">$rated</div>"; 
                            }

                            
                            
                            echo "<ul>";
                            echo "<div class=\"Nen\">";
                            if (strlen($tmp['TenPhim']) > 22) {
                                $pieces = explode(" ", $tmp['TenPhim']);
                                $new = "";
                                if (count($pieces) == 4) {
                                    $new = $tmp['TenPhim'];
                                } else {
                                    for($i = 0; $i <= 2; $i++) {
                                        $new = $new . $pieces[$i] . " ";
                                    }
                                    $new = $new . "...";
                                }
                                echo "<p class=\"TenPhim\">$new</p>";
                            } else {
                                echo "<p class=\"TenPhim\">{$tmp['TenPhim']}</p>";
                            }
                            
                            echo "<input name=\"id\" type=\"hidden\" value=\"{$tmp['id']}\">";
                            echo "<button type=\"submit\" class=\"btnChiTiet\">Xem chi tiết</button>";
                            echo "<button class=\"btnMuaVe\">Mua vé</button>";
                            echo "</div>";
                            echo "</ul>";
                            echo "</form>";
                            echo "</div>";
                            echo "</div>";        

                        }  
                    ?>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!--Mục phim sắp chiếu -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Phim sắp chiếu</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                    <?php 
                        
                        //Lấy dữ liệu
                        $sql = "SELECT * FROM movie where TrangThai = 0";
                        $result = $conn->query($sql);

                        while($tmp = $result->fetch_assoc()) {
                            echo "<form action=\"detail.php\" method=\"GET\">";
                            $url = "images/" . $tmp['Poster'];
                            
                            echo "<div class=\"product-item\">";
                            echo "<div class=\"pi-pic\">";
                            echo "<a href=\"\" ><img src={$url} alt=\"\"></a>";
                            if ($tmp['DoTuoi'] == 0) {
                                echo "<div class=\"saleP\">P</div>"; 
                            }
                            else if ($tmp['DoTuoi'] == 18) {
                                echo "<div class=\"sale18\">C18</div>"; 
                            }
                            else {
                                $rated = "C" . $tmp['DoTuoi'];
                                echo "<div class=\"sale13\">$rated</div>"; 
                            }

                            
                            
                            echo "<ul>";
                            echo "<div class=\"Nen\">";
                            if (strlen($tmp['TenPhim']) > 22) {
                                $pieces = explode(" ", $tmp['TenPhim']);
                                $new = "";
                                for($i = 0; $i <= 2; $i++) {
                                    $new = $new . $pieces[$i] . " ";
                                }
                                $new = $new . "...";
                                echo "<p class=\"TenPhim\">$new</p>";
                            } else {
                                echo "<p class=\"TenPhim\">{$tmp['TenPhim']}</p>";
                            }
                            
                            echo "<input name=\"id\" type=\"hidden\" value=\"{$tmp['id']}\">";
                            echo "<button type=\"submit\" class=\"btnChiTiet\">Xem chi tiết</button>";
                            echo "<button class=\"btnMuaVe\">Mua vé</button>";
                            echo "</div>";
                            echo "</ul>";
                            echo "</form>";
                            echo "</div>";
                            echo "</div>";   

                        }
                        ?>
                    
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg="images/nha_ba_nu.jpg">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    <!-- End -->
    
</body>
    <!--THÀNH VIÊN NHÓM -->
    <div style="background-color: #fff7eb;" class="py-5">
    <div class="container py-5">
        <div class="row mb-4">
        <div class="col-lg-5">
            <h2 class="display-4 font-weight-light">Our team</h2>
            <p class="font-italic text-muted">Website had built by us.</p>
        </div>
        </div>

        <div class="row text-center">
        <!-- Tuấn-->
        <div class="col-xl-4 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Huỳnh Anh Tuấn</h5><span class="small text-uppercase text-muted">52000291</span>
            <ul class="social mb-0 list-inline mt-3">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            </div>
        </div>
        <!-- End-->

        <!-- Bảo-->
        <div class="col-xl-4 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834130/avatar-3_hzlize.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Thái Gia Bảo</h5><span class="small text-uppercase text-muted">52000014</span>
            <ul class="social mb-0 list-inline mt-3">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            </div>
        </div>
        <!-- End-->

        <!-- Huy -->
        <div class="col-xl-4 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-1_s02nlg.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Hồ Minh Huy</h5><span class="small text-uppercase text-muted">52000666</span>
            <ul class="social mb-0 list-inline mt-3">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            </div>
        </div>
        <!--End-->

        </div>
    </div>
    </div>

    <!-- footer-->
    <footer style="background-color: #fff7eb;" class="pb-5">
    <div class="container text-center">
        <p class="font-italic text-muted mb-0">&copy; CÔNG TY TNHH BTH VIETNAM.</p>
        <p class="font-italic text-muted mb-0"> Địa Chỉ: Số 19, Nguyễn Hữu Thọ, P.Tân Phong, Q.7, TPHCM.</p>
        <p class="font-italic text-muted mb-0"> Hotline: 1900 6017.</p>
        <p class="font-italic text-muted mb-0"> COPYRIGHT 2017 CJ CGV. All RIGHTS RESERVED .</p>
    </div>
    </footer>

    <!-- Js Plugins -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</html>


