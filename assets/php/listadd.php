<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./listadd.css">
    <link rel="stylesheet" href="base.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="header">
            <div class="header-container">
                <p>DANH MỤC</p>
            </div>
        </div>
    </section>
    <?php
        include "connect.php";
    ?>
    <section>
        <div class="menu">
            <div class="menu-container">
                <div class="menu-container-left l-2 c-2 m-2">
                    <div class="menu-container-left-content">
                        <p>DANH MỤC</p>
                    </div>
                    <div class="menu-container-left-list">
                        <ul>
                            <a href="up_product.php" target="loadpage" ><li>THEM SAN PHẨM TRANG CHỦ</li></a>
                            <a href="up_news.php" target="loadpage"><li>THÊM KHUYẾN MÃI</li></a>
                            <a href="up_menu.php" target= "loadpage" ><li>THÊM MENU</li></a>
                            <a href="up_shopsystem.php" target = "loadpage"><li>THÊM ĐỊA ĐIỂM</li></a>
                            <a href="up_blog.php" target = "loadpage"><li>THÊM BLOG</li></a>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="menu-container-right l-10 c-10 m-10">
                  
                    <article>
                        <iframe src="up_news.php" name="loadpage" frameborder="0" width="100%" height="300px"></iframe>
                    </article>
                </div>
            </div>
        </div>
    </section>
</body>
</html>