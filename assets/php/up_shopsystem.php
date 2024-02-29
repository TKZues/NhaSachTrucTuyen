<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./base.css">
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <section>
        <div class="header">
            <p>THÊM DANH SÁCH NHÀ HÀNG</p>
        </div>
    </section>
    <?php
        include "connect.php";
    ?>

    <?php
        $connect = new connect;
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $insert_shopsystem = $connect -> insert_shopsystem();
        }
    ?>
    <section>
        <div class="insert_shopsystem c-12 l-12 m-12">
            <div class="insert_shopsystem_content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="insert_shopsystem_img">
                        <label for="">Nhập hình ảnh</label>
                        <input name="hinhAnh" required type="file">
                    </div>
                    <div class="insert_shopsystem_name">
                        <label for="">Nhập tên</label>
                        <input name="Ten" required type="text">
                    </div>
                    <div class="insert_shopsystem_adress">
                        <label for="">Nhập địa chỉ</label>
                        <input name="diaChi" required type="text">
                    </div>
                    <div class="insert_shopsystem_phone">
                        <label for="">Nhập số điện thoại</label>
                        <input name="dienThoai" required type="text">
                    </div>
                    <div class="insert_shopsystem_time">
                        <label for="">Nhập thời gian</label>
                        <input name="thoiGian" required type="text">
                    </div>
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>