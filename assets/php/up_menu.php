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
            <p>THÊM MENU CHO TRANG CHỦ</p>
        </div>
    </section>

    <?php
        include "connect.php";
    ?>
    <?php
        $connect = new connect;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $insert_menu = $connect -> insert_menu();
        }
    ?>

    <section>
        <div class="insert-menu c-12 m-12 l-12">
            <div class="insert-menu-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="insert-menu-img">
                        <label for="">Nhập hình ảnh</label>
                        <input type="file" name="hinhAnh" required id="">
                    </div>
                    <div class="insert-menu-name">
                        <label for="">Nhập tên sản phẩm</label>
                        <input type="text" name="tenSanPham" required >
                    </div>
                    <div class="insert-menu-produce">
                        <label for="">Nhập mô tả</label>
                        <input name="moTa" required type="text">
                    </div>
                    <div class="insert-menu-price">
                        <label for="">Nhập giá</label>
                        <input name="Gia" required type="text">
                    </div>
                    <button type="submit">Lưu</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>