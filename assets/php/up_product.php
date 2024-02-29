<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UP_PRODUCT</title>
</head>
<body>
        <?php   
            include "connect.php";
        ?>  
        <?php
            $connect = new connect;
            if($_SERVER['REQUEST_METHOD']=== 'POST'){
               
                
                $insert_product_index = $connect -> insert_product_index();
            }
        ?>
    <div class="main">
        <div class="main-container">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="main-img">
                <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                <input name = 'hinhAnh' required type="file">
            </div>
            <div class="main-name">
                <label for="">Tên sản phẩm</label>
                <input name="ten" required type="text">
            </div>
            <div class="main-price">
                <label for="">Giá sản phẩm</label>
                <input name="gia" required type="text">
            </div>
            <button type="submit">Thêm</button>
            </form>
        </div>
    </div>
</body>
</html>