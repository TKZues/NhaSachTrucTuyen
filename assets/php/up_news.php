<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./up_news.css">
    <link rel="stylesheet" href="./base.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="header">
            <div class="header-content">
                <p>THÊM SẢN PHẨM CHO TRANG CHỦ</p>
            </div>
        </div>
    </section>
    <?php
        include "connect.php";
    ?>
    <?php
        $connect = new connect;
       
            if($_SERVER['REQUEST_METHOD']=== 'POST'){
               
                
                $insert_news = $connect -> insert_news();
            }
    ?>
    <section>
        <div class="insert-news l-12 c-12 m-12">
            <div class="insert-news-content">
                <form  action="" method="POST" enctype="multipart/form-data">
                    <div class="insert-img">
                        <label for="">Chọn ảnh</label>
                        <input name="hinhAnh" required type="file" name="" id="">
                    </div>
                    <div class="insert-name">
                        <label for="">Nhập tên khuyến mãi</label>
                        <input name = "tenKhuyenMai" required type="text" name="" id="">
                    </div>
                    <div  class="insert-time">
                        <label for="">Nhập thời gian</label>
                        <input name="thoiGian" required type="text" name="" id="">
                    </div>
                    <div class="insert-location">
                        <label for="">Nhập địa điểm</label>
                        <input name="diaDiem" required type="text" name="" id="">
                    </div>
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>