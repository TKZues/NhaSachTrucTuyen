<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/icotittle.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="./base.css">
    <link rel="stylesheet" href="./main.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="./assets/js/slide_lib.js"></script> -->
    <script src="./assets/js/carousel.js"></script>
    <script src="./assets/js/script.js"></script>
    <!-- Font -->
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="http://fonts.cdnfonts.com/css/davida-bold" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Trang chủ - Maneki</title>
</head>
<body>
    <div class="wrapper grid">
        <header class="header">
            <div class="header__top">
                <div class="header__top-hotline-box">
                    <span class="header__top-hotline">Hotline: 
                        <span class="header__top-hotline-num">1900.63.66.50</span>
                    </span>
                    <span class="header__top-language">
                        <a class="header__top-language-link" href="#">VI</a>
                        /
                        <a class="header__top-language-link" href="#">EN</a>
                    </span>
                </div>
            </div>
            <div class="header__primary">
                <div class="header__primary-logo">

                <?php
                    $image_path3 = "/PS20232_Tranquocviet_ASMFINAL/assets/img/logo_new.png";
                ?>
                    <a href="index.php">
                        <img src="<?php echo $image_path3 ?>" alt="">
                    </a>
                </div>
                <nav class="header__primary-nav">
                    <ul class="header__primary-nav-list">
                        <li class="header__primary-nav-item header__primary-nav-item--active">
                            <a href="index.php" class="header__primary-nav-item-link">trang chủ</a>
                        </li>
                        <li class="header__primary-nav-item">
                            <a href="menu.php" class="header__primary-nav-item-link">menu</a>
                        </li>
                        <li class="header__primary-nav-item">
                            <a href="shopsystem.php" class="header__primary-nav-item-link">hệ thống nhà hàng</a>
                        </li>
                        <li class="header__primary-nav-item">
                            <a href="news.php" class="header__primary-nav-item-link">khuyến mãi</a>
                        </li>
                        <li class="header__primary-nav-item">
                            <a href="booking.php" class="header__primary-nav-item-link">đặt bàn</a>
                        </li>
                        <li class="header__primary-nav-item">
                            <a href="blog.php" class="header__primary-nav-item-link">blog</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__primary-control">
                    <div class="header__primary-control-search">
                        <div class="header__primary-control-search-form">
                            <input class="header__primary-control-search-input" type="text" placeholder="Nhập từ cần tìm">
                            <div class="header__primary-control-search-ico">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>                        
                    </div>
                    <div class="header__primary-control-cart">
                        <a href="cart.php">
                        <?php
                        $image_path1 = "/PS20232_Tranquocviet_ASMFINAL/assets/img/1-icon-shopping.png";
                    ?>
                    <p>
                    <img src="<?php echo $image_path1 ?>" alt="">
                    </p>
                          
                        </a>
                    </div>
                </div>
                <button class="header__primary-btn-mobile">
                    <i class="fas fa-bars"></i> MENU
                </button>
            </div>
        </header>
        <div class="nav-mobile">
            <ul class="nav-mobile__list">
                <li class="nav-mobile__list-item">
                    <a href="index.php" class="nav-mobile__list-link">trang chủ</a>
                </li>
                <li class="nav-mobile__list-item">
                    <a href="menu.php" class="nav-mobile__list-link">menu</a>
                </li>
                <li class="nav-mobile__list-item">
                    <a href="shopsystem.php" class="nav-mobile__list-link">hệ thống nhà hàng</a>
                </li>
                <li class="nav-mobile__list-item">
                    <a href="news.php" class="nav-mobile__list-link">khuyến mại</a>
                </li>
                <li class="nav-mobile__list-item">
                    <a href="booking.php" class="nav-mobile__list-link">đặt bàn</a>
                </li>
                <li class="nav-mobile__list-item">
                    <a href="blog.php" class="nav-mobile__list-link">blog</a>
                </li>
            </ul>
            <div class="nav-mobile-close-btn">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <main class="main">
            <section class="banner">
                <video muted="" playsinline="" autoplay="" class="" loop="" preload="auto">
                    <source src="http://21035.lamdx.vinawebsite.vn/wp-content/uploads/2019/01/0-video-15s.mp4" type="video/mp4" >
                </video>
            </section>
            <section class="about">
                <div class="grid wide">
                    <div class="row theme__title">
                        <h3 class="theme__back-text">
                            Maneki Neko Deli
                        </h3>
                        <h4 class="theme__front-text">
                            - Giới thiệu
                        </h4>
                    </div>
                    <div class="row about-1">
                        <div class="col l-7 m-6">
                            <div class="about__inner-col-1">
                                <p>Tinh<br>
                                    Hoa<br>
                                    Ẩm<br>
                                    Thực<br>
                                    Nhật<br>
                                    Bản
                                </p>
                                <?php
                                    $image_path1 = "/PS20232_Tranquocviet_ASMFINAL/assets/img/khanhthanh.jpg";
                                ?>
                                <p>
                                    <img src="<?php echo $image_path1 ?>" alt="khanhthanh">
                                </p>
                            </div>
                        </div>
                        <div class="col l-5 m-6 c-0 about__col-2">
                            <p class="about__inner-col-2">
                                Nhà hàng Maneki Neko Deli là sự kết hợp giữa tinh hoa nghệ thuật ẩm thực Nhật Bản và tài hoa của những đầu bếp trứ danh, mang đến sự trải nghiệm tuyệt vời cho quý thực khách. Nhà hàng phục vụ hơn 100 món ăn chất lượng được chế biến từ những nguyên liệu tươi ngon bậc nhất, sử dụng trong ngày, đảm bảo hương vị chuẩn Nhật.
                            </p>
                        </div>
                    </div>
                    <div class="row about-2">
                        <div class="col l-5 m-5 c-0">
                            <?php 
                                $image_path2 = "/PS20232_Tranquocviet_ASMFINAL/assets/img/gioithieu2.jpg";
                            ?>
                            <div class="about-2__img">
                                <img src="<?php echo $image_path2 ?>" alt="">
                            </div>
                        </div>
                        <div class="col l-7 m-7 c-12">
                            <div class="about-2__text-wrapper">
                                <div class="about-2__text-inner col l-6 pull-right ">
                                    <p class="about-2__text about-2__text--1">
                                        Sashimi<br>
                                            Ngon<br>
                                            Chuẩn<br>
                                            Vị
                                    </p>
                                    <p class="about-2__text about-2__text--2">Sushi<br>
                                        Tươi<br>
                                        Mỗi<br>
                                        Ngày
                                    </p>
                                </div>
                                <div class="col l-12">
                                    <div class="about-2__text-wrapper-desc">
                                        Đến Maneki không nên bỏ qua<br>
                                        cơ hội thưởng thức các món ăn độc đáo,<br>
                                        đậm chất nghệ thuật của đất nước<br>
                                        Phù Tang xinh đẹp.<br>
                                        Gồm các món sushi, sashimi, tempura,<br>
                                        bento, udon, hotpot, … với mức giá hợp lý, tươi ngon,<br>
                                        rất hợp với khẩu vị với người Việt
                                    </div>
                                </div>
                                <div class="col l-12">
                                    <div class="about-2__text-wrapper-title">
                                        Thực đơn trên <strong>130 món</strong> Alacarte
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="outstanding-food">
                <div class="grid wide">
                    <div class="theme__title">
                        <p class="theme__back-text">
                            Special Japanese Food
                        </p>
                        <p class="theme__front-text">
                            - Món Nhật nổi bật
                        </p>
                    </div>
                    <?php
            include "connect.php";
        ?>
        <?php
            $connect = new connect;
            $show_product_index = $connect->show_product_index();

        ?>
                    <div class="row listProduct">
                    <?php
                                if ( $show_product_index) {
                                    while ( $result =  $show_product_index->fetch_assoc()) {
                                        $image_path = "/PS20232_Tranquocviet_ASMFINAL/assets/img/" . $result['hinhAnh'];
                            ?>
                        <div class="listProduct__item col l-3 m-4 c-6">
                            
                        <a href="product_details.php?image=<?php echo urlencode($image_path); ?>&name=<?php echo urlencode($result['ten']); ?>&price=<?php echo urlencode($result['gia']); ?>" class="listProduct__item-link">
                                <img class="listProduct__item-img" src="<?php echo $image_path; ?>" alt="">
                                <div class="listProduct__item-desc">
                                    <div class="listProduct__item-name">
                                        <?php echo $result['ten'] ?>
                                    </div>
                                    <div class="listProduct__item-price">
                                        <?php echo $result['gia']  ?><span class="listProduct__item-unit">₫</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                            }
                        }
                        ?>
                            
                    </div>
                </div>

            </section>
            <section class="ads grid"></section>
            <section class="giveaway">
               <div class="grid wide">
                    <div class="theme__title">
                        <p class="theme__back-text">
                            Special Promotion
                        </p>
                        <p class="theme__front-text">
                            - chương trình khuyến mãi nổi bật
                        </p>
                    </div>
                    <div class="slideShow">
                        <div class="slideShow__listSlide-wrapper">
                            <div class="slideShow__listSlide-wrapper-inner grid wide">
                                <ul class="row row-no-mg slideShow__listSlide" style="transform: translateX(0%);">
                                    <li class="col l-4 m-4 c-10 c-o-1 slideShow__item">
                                        <a class="slideShow__item-link" href="#">
                                            <div class="slideShow__item-img-wrapper">
                                                <img src="./assets/img/combo-2-4-người-711x400.jpg" alt="Hinh" class="slideShow__item-img">
                                            </div>
                                            <div class="slideShow__item-text">
                                                <div class="slideShow__item-name">
                                                    COMBO MANEKI - ĐI ĂN CÓ HỘI VUI GẤP BỘI
                                                </div>
                                                <div class="slideShow__item-dsc">
                                                    <div class="slideShow__item-time">
                                                        <span class="slideShow__item-time-title">
                                                            Thời gian:
                                                        </span>
                                                        <span class="slideShow__item-time-content">
                                                            18/12/2020 - 31/01/2021
                                                        </span>
                                                    </div>
                                                    <div class="slideShow__item-location">
                                                        <span class="slideShow__item-location-title">
                                                            Địa điểm:
                                                        </span>
                                                        <span class="slideShow__item-location-content">
                                                            Toàn hệ thống nhà hàng Maneki
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button href="#" class="slideShow__item-btn">
                                                Xem chi tiết
                                            </button>
                                        </a>
                                    </li>
                                    <li class="col l-4 m-4 c-10 c-o-1 slideShow__item">
                                        <a class="slideShow__item-link" href="#">
                                            <div class="slideShow__item-img-wrapper">
                                                <img src="./assets/img/com-bento-20-679x400.jpg" alt="Hinh" class="slideShow__item-img">
                                            </div>
                                            <div class="slideShow__item-text">
                                                <div class="slideShow__item-name">
                                                    MANEKI KHAO BẠN CƠM BENTO NHẬT GIẢM ĐẾN 20%
                                                </div>
                                                <div class="slideShow__item-dsc">
                                                    <div class="slideShow__item-time">
                                                        <span class="slideShow__item-time-title">
                                                            Thời gian:
                                                        </span>
                                                        <span class="slideShow__item-time-content">
                                                            13/10/2020 - 31/12/2020
                                                        </span>
                                                    </div>
                                                    <div class="slideShow__item-location">
                                                        <span class="slideShow__item-location-title">
                                                            Địa điểm:
                                                        </span>
                                                        <span class="slideShow__item-location-content">
                                                            Maneki Vivo Quận 7 và Maneki Vincom Thủ Đức
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <button href="#" class="slideShow__item-btn">
                                                Xem chi tiết
                                            </button>
                                        </a>
                                    </li>
                                    <li class="col l-4 m-4 c-10 c-o-1 slideShow__item">
                                        <a class="slideShow__item-link" href="#">
                                            <div class="slideShow__item-img-wrapper">
                                                <img src="./assets/img/momo-hoàn-tiền-10-400x400.jpg" alt="Hinh" class="slideShow__item-img">
                                            </div>
                                            <div class="slideShow__item-text">
                                                <div class="slideShow__item-name">
                                                    Khám phá muôn vị ẩm thực tại SHC – Hoàn tiền đến 10% khi thanh toán bằng MOMO 💰 
                                                </div>
                                                <div class="slideShow__item-dsc">
                                                    <div class="slideShow__item-time">
                                                        <span class="slideShow__item-time-title">
                                                            Thời gian:
                                                        </span>
                                                        <span class="slideShow__item-time-content">
                                                            01/08/2020 - 28/02/2021
                                                        </span>
                                                    </div>
                                                    <div class="slideShow__item-location">
                                                        <span class="slideShow__item-location-title">
                                                            Địa điểm:
                                                        </span>
                                                        <span class="slideShow__item-location-content">
                                                            Toàn hệ thống nhà hàng Maneki
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <button href="#" class="slideShow__item-btn">
                                                Xem chi tiết
                                            </button>
                                        </a>
                                    </li>
                                    <li class="col l-4 m-4 c-10 c-o-1 slideShow__item">
                                        <a class="slideShow__item-link" href="#">
                                            <div class="slideShow__item-img-wrapper">
                                                <img src="./assets/img/tặng-pepsi.jpg" alt="Hinh" class="slideShow__item-img">
                                            </div>
                                            <div class="slideShow__item-text">
                                                <div class="slideShow__item-name">
                                                    CHECK IN LIỀN TAY – FREE PEPSI TRAO NGAY TẠI NHÀ MANEKI
                                                </div>
                                                <div class="slideShow__item-dsc">
                                                    <div class="slideShow__item-time">
                                                        <span class="slideShow__item-time-title">
                                                            Thời gian:
                                                        </span>
                                                        <span class="slideShow__item-time-content">
                                                            02/10/2020 - 30/11/2020
                                                        </span>
                                                    </div>
                                                    <div class="slideShow__item-location">
                                                        <span class="slideShow__item-location-title">
                                                            Địa điểm:
                                                        </span>
                                                        <span class="slideShow__item-location-content">
                                                            Toàn hệ thống nhà hàng Maneki
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <button href="#" class="slideShow__item-btn">
                                                Xem chi tiết
                                            </button>
                                        </a>
                                    </li>
                                    <li class="col l-4 m-4 c-10 c-o-1 slideShow__item">
                                        <a class="slideShow__item-link" href="#">
                                            <div class="slideShow__item-img-wrapper">
                                                <img src="./assets/img/tăng-sashimi.jpg" alt="Hinh" class="slideShow__item-img">
                                            </div>
                                            <div class="slideShow__item-text">
                                                <div class="slideShow__item-name">
                                                    TẶNG SASHIMI – ĂN NGON VUI HOAN HỈ TẠI MANEKI
                                                </div>
                                                <div class="slideShow__item-dsc">
                                                    <div class="slideShow__item-time">
                                                        <span class="slideShow__item-time-title">
                                                            Thời gian:
                                                        </span>
                                                        <span class="slideShow__item-time-content">
                                                            07/09/2020 - 30/11/2020
                                                        </span>
                                                    </div>
                                                    <div class="slideShow__item-location">
                                                        <span class="slideShow__item-location-title">
                                                            Địa điểm:
                                                        </span>
                                                        <span class="slideShow__item-location-content">
                                                            Toàn hệ thống nhà hàng Maneki
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <button href="#" class="slideShow__item-btn">
                                                Xem chi tiết
                                            </button>
                                        </a>
                                    </li>
                                    <li class="col l-4 m-4 c-10 c-o-1 slideShow__item">
                                        <a class="slideShow__item-link" href="#">
                                            <div class="slideShow__item-img-wrapper">
                                                <img src="./assets/img/grab-moca-1-e1601453324715-558x400.jpg" alt="Hinh" class="slideShow__item-img">
                                            </div>
                                            <div class="slideShow__item-text">
                                                <div class="slideShow__item-name">
                                                    GRAB MOCA – HOÀN TIỀN ĐẾN 30K KHI DÙNG BỮA TẠI NHÀ MANEKI
                                                </div>
                                                <div class="slideShow__item-dsc">
                                                    <div class="slideShow__item-time">
                                                        <span class="slideShow__item-time-title">
                                                            Thời gian:
                                                        </span>
                                                        <span class="slideShow__item-time-content">
                                                            30/09/2020 - 28/10/2020
                                                        </span>
                                                    </div>
                                                    <div class="slideShow__item-location">
                                                        <span class="slideShow__item-location-title">
                                                            Địa điểm:
                                                        </span>
                                                        <span class="slideShow__item-location-content">
                                                            Toàn hệ thống nhà hàng Maneki
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <button href="#" class="slideShow__item-btn">
                                                Xem chi tiết
                                            </button>
                                        </a>
                                    </li>
                                    <li class="col l-4 m-4 c-10 c-o-1 slideShow__item">
                                        <a class="slideShow__item-link" href="#">
                                            <div class="slideShow__item-img-wrapper">
                                                <img src="./assets/img/15-hssv-679x400.jpg" alt="Hinh" class="slideShow__item-img">
                                            </div>
                                            <div class="slideShow__item-text">
                                                <div class="slideShow__item-name">
                                                    NHẮM MẮT THẦY MÙA HÈ – NGÀN ƯU ĐÃI CỰC CHẤT DÀNH CHO HSSV
                                                </div>
                                                <div class="slideShow__item-dsc">
                                                    <div class="slideShow__item-time">
                                                        <span class="slideShow__item-time-title">
                                                            Thời gian:
                                                        </span>
                                                        <span class="slideShow__item-time-content">
                                                            15/07/2020 - 30/09/2020
                                                        </span>
                                                    </div>
                                                    <div class="slideShow__item-location">
                                                        <span class="slideShow__item-location-title">
                                                            Địa điểm:
                                                        </span>
                                                        <span class="slideShow__item-location-content">
                                                            Maneki Vincom Thủ Đức
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <button href="#" class="slideShow__item-btn">
                                                Xem chi tiết
                                            </button>
                                        </a>
                                    </li>
                                    <li class="col l-4 m-4 c-10 c-o-1 slideShow__item">
                                        <a class="slideShow__item-link" href="#">
                                            <div class="slideShow__item-img-wrapper">
                                                <img src="./assets/img/com-bento-20-679x400.jpg" alt="Hinh" class="slideShow__item-img">
                                            </div>
                                            <div class="slideShow__item-text">
                                                <div class="slideShow__item-name">
                                                    MANEKI KHAO BẠN CƠM BENTO NHẬT GIẢM ĐẾN 20%
                                                </div>
                                                <div class="slideShow__item-dsc">
                                                    <div class="slideShow__item-time">
                                                        <span class="slideShow__item-time-title">
                                                            Thời gian:
                                                        </span>
                                                        <span class="slideShow__item-time-content">
                                                            01/07/2020 - 31/08/2020
                                                        </span>
                                                    </div>
                                                    <div class="slideShow__item-location">
                                                        <span class="slideShow__item-location-title">
                                                            Địa điểm:
                                                        </span>
                                                        <span class="slideShow__item-location-content">
                                                            Maneki Vivo Quận 7 và Maneki Vincom Thủ Đức
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <button href="#" class="slideShow__item-btn">
                                                Xem chi tiết
                                            </button>
                                        </a>
                                    </li>
                                    <li class="col l-4 m-4 c-10 c-o-1 slideShow__item">
                                        <a class="slideShow__item-link" href="#">
                                            <div class="slideShow__item-img-wrapper">
                                                <img src="./assets/img/shc-member-1-679x400.jpg" alt="Hinh" class="slideShow__item-img">
                                            </div>
                                            <div class="slideShow__item-text">
                                                <div class="slideShow__item-name">
                                                    MemberDay – ƯU ĐÃI CỰC SỐC GIẢM GIÁ CỰC KHỦNG
                                                </div>
                                                <div class="slideShow__item-dsc">
                                                    <div class="slideShow__item-time">
                                                        <span class="slideShow__item-time-title">
                                                            Thời gian:
                                                        </span>
                                                        <span class="slideShow__item-time-content">
                                                            Dài Hạn
                                                        </span>
                                                    </div>
                                                    <div class="slideShow__item-location">
                                                        <span class="slideShow__item-location-title">
                                                            Địa điểm:
                                                        </span>
                                                        <span class="slideShow__item-location-content">
                                                            Toàn hệ thống nhà hàng Maneki
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <button href="#" class="slideShow__item-btn">
                                                Xem chi tiết
                                            </button>
                                        </a>
                                    </li>
                                    <li class="col l-4 m-4 c-10 c-o-1 slideShow__item">
                                        <a class="slideShow__item-link" href="#">
                                            <div class="slideShow__item-img-wrapper">
                                                <img src="./assets/img/MTY-MNK-541x400.png" alt="Hinh" class="slideShow__item-img">
                                            </div>
                                            <div class="slideShow__item-text">
                                                <div class="slideShow__item-name">
                                                    MÙA TÌNH YÊU – TRAO YÊU THƯƠNG NGỌT NGÀO
                                                </div>
                                                <div class="slideShow__item-dsc">
                                                    <div class="slideShow__item-time">
                                                        <span class="slideShow__item-time-title">
                                                            Thời gian:
                                                        </span>
                                                        <span class="slideShow__item-time-content">
                                                            13/02/2020 - 31/03/2020
                                                        </span>
                                                    </div>
                                                    <div class="slideShow__item-location">
                                                        <span class="slideShow__item-location-title">
                                                            Địa điểm:
                                                        </span>
                                                        <span class="slideShow__item-location-content">
                                                            Toàn hệ thống nhà hàng Maneki
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <button href="#" class="slideShow__item-btn">
                                                Xem chi tiết
                                            </button>
                                        </a>
                                    </li>
                                    <li class="col l-4 m-4 c-10 c-o-1 slideShow__item">
                                        <a class="slideShow__item-link" href="#">
                                            <div class="slideShow__item-img-wrapper">
                                                <img src="./assets/img/tablenow.png" alt="Hinh" class="slideShow__item-img">
                                            </div>
                                            <div class="slideShow__item-text">
                                                <div class="slideShow__item-name">
                                                    TABLE NOW – giảm từ 10-15%
                                                </div>
                                                <div class="slideShow__item-dsc">
                                                    <div class="slideShow__item-time">
                                                        <span class="slideShow__item-time-title">
                                                            Thời gian:
                                                        </span>
                                                        <span class="slideShow__item-time-content">
                                                            Từ 01/03/2019 
                                                        </span>
                                                    </div>
                                                    <div class="slideShow__item-location">
                                                        <span class="slideShow__item-location-title">
                                                            Địa điểm:
                                                        </span>
                                                        <span class="slideShow__item-location-content">
                                                            Toàn hệ thống SHC Việt Nam
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <button href="#" class="slideShow__item-btn">
                                                Xem chi tiết
                                            </button>
                                        </a>
                                    </li>
                                    <li class="col l-4 m-4 c-10 c-o-1 slideShow__item">
                                        <a class="slideShow__item-link" href="#">
                                            <div class="slideShow__item-img-wrapper">
                                                <img src="./assets/img/vin-800x346.jpg" alt="Hinh" class="slideShow__item-img">
                                            </div>
                                            <div class="slideShow__item-text">
                                                <div class="slideShow__item-name">
                                                    GIẢM 15% CHO KHÁCH HÀNG CÓ APP VINID
                                                </div>
                                                <div class="slideShow__item-dsc">
                                                    <div class="slideShow__item-time">
                                                        <span class="slideShow__item-time-title">
                                                            Thời gian:
                                                        </span>
                                                        <span class="slideShow__item-time-content">
                                                            Từ 24/092019 - 31/12/2019
                                                        </span>
                                                    </div>
                                                    <div class="slideShow__item-location">
                                                        <span class="slideShow__item-location-title">
                                                            Địa điểm:
                                                        </span>
                                                        <span class="slideShow__item-location-content">
                                                            Toàn hệ thống SHC Việt Nam
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <button href="#" class="slideShow__item-btn">
                                                Xem chi tiết
                                            </button>
                                        </a>
                                    </li>
                                </ul>
                                <div class="slideShow__btn-wrapper slideShow__btn-wrapper--prev">
                                    <button class="slideShow__btn slideShow__btn--prev"></button>
                                </div>
                                <div class="slideShow__btn-wrapper slideShow__btn-wrapper--next">
                                    <button class="slideShow__btn slideShow__btn--next"></button>
                                </div>
                            </div>
                        </div>
                       
                    </div>
               </div>
            </section>
        </main>
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-content-inner">
                    <div class="grid wide">
                        <div class="row">
                            <div class="col l-4 m-4 c-12">
                                <div class="footer__info">
                                    <div class="footer__info-brand">
                                        <img src="./assets/img/logoshc.jpg" alt="" class="footer__info-brand-logo">
                                    </div>
                                    <div class="footer__info-brand-desc">
                                        CÔNG TY CỔ PHẦN ĐẦU TƯ THƯƠNG MẠI VÀ DỊCH VỤ SHC VIỆT NAM
                                    </div>
                                </div>
                                <div class="footer_info-desc">
                                    <p>TRỤ SỞ CHÍNH
                                        <br>Tầng 12, tháp B, tòa nhà Sông Đà,
                                        <br>18 Phạm Hùng, Nam Từ Liêm, Hà Nội
                                        <br>CHI NHÁNH
                                        <br>34 Phan Đình Giót, phường 2,
                                        <br>quận Tân Bình, TP.HCM
                                        <br>LIÊN HỆ
                                        <br>024 3200 5108 hoặc 028 3997 4780
                                        </p>
                                </div>
                            </div>
                            <div class="col l-4 m-4 c-12">
                                <div class="row">
                                    <div class="col l-6 m-6 c-6">
                                        <div class="footer__info">
                                            <div class="footer__info-brand-desc">
                                                TẢI VÀ CÀI ĐẶT ỨNG DỤNG SHC FOOD
                                            </div>
                                        </div>
                                        <div class="footer_info-desc">
                                            iOS
                                            <img src="/assets/img/appetizer-1846083_1920-100x100.jpg" alt="">
                                            ANDROID
                                            <img src="./assets/img/chplay.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col l-6 m-6 c-6">
                                        <div class="footer__info">
                                            <div class="footer__info-brand-desc">
                                                HỆ THỐNG NHÀ HÀNG MANEKI NEKO DELI
                                            </div>
                                        </div>
                                        <div class="footer_info-desc">
                                            <p>GIỜ MỞ CỬA
                                                <br>10:00 - 22:00
                                                <br>HOTLINE
                                                <br>1900 36 6650
                                                <br>hoặc
                                                <br>024 3902 8999
                                                <br>EMAIL
                                                <br>cskh@shcvietnam.com.vn
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-4 m-4 c-12">
                                <div class="footer__info">
                                    <div class="footer__info-brand-desc">
                                        FANPAGE FACEBOOK
                                    </div>
                                </div>
                                <div class="footer_info-desc">
                                    <p>
                                        https://www.facebook.com/manekinekodeli/
                                    </p>
                                    <p class="footer_info-login-count">
                                        Bạn đã truy cập: <span class="footer_info-number-count"></span> lần
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="scrollTop">
        <i class="fas fa-chevron-up"></i>
    </div>
</body>
</html>