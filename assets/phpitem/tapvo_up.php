<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm xu hướng mua sắm</title>
</head>
<body>
    <section>
        <div class="header">
            <div class="header-content">
                <p>THÊM SẢN PHẨM CHO TẬP VỞ</p>
            </div>
        </div>
    </section>
    <?php
        include "connect.php";
    ?>
    <?php
        $connect = new connect;
        if($_SERVER['REQUEST_METHOD']==='POST'){
        $insert_tapvo = $connect -> insert_tapvo();
        }
    ?>
    <section>
        <div class="insert-tapvo l-12 c-12 m-12">
            <div class="insert-tapvo-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="insert-primarykey">
                        <label for="">Nhập mã sách</label>
                        <input type="text" name="matapvo" id="">
                    </div>
                    <div class="insert-salepercent">
                        <label for="">Nhập phần trăm khuyến mãi</label>
                        <input type="number" name="phanTram" id="">
                    </div>
                    <div class="insert-img">
                        <label for="">Chọn ảnh</label>
                        <input type="file" name="hinhAnh" id="">
                    </div>
                    <div class="insert-name">
                        <label for="">Nhập tên sách</label>
                        <input type="text" name="tenSach" id="">
                    </div>
                    <div class="insert-money">
                        <label for="">Nhập tiền</label>
                        <input type="number" name="tienGiam" id="">
                    </div>
                    <div class="insert-orginal">
                        <label for="">Nhập tiền gốc</label>
                        <input type="number" name="tienGoc" id="">
                    </div>
                
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>