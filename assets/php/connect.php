<?php
    include "database.php";
?>
<?php
    class connect{
        private $db;
        public function __construct()
        {
            $this -> db = new Database();
        }

        public function insert_cart($hoTen, $ngayDatBan,$soDienThoai,$nguoiLon ,$email ,$nhaHang,$chonGio,$chonPhut, $moTa){
            $query = "INSERT INTO booking (hoTen, ngayDatBan, soDienThoai, nguoiLon, email, treEm, nhaHang, chonGio, chonPhut, moTa)
            VALUES ('$hoTen', '$ngayDatBan', '$soDienThoai', '$nguoiLon', '$email', '$treEm', '$nhaHang',  '$chonGio', '$chonPhut', '$moTa')";
            $result = $this -> db ->insert($query);
            return $result;
        }

        public function show_cart(){
            $query = "Select *from booking ";
            $result = $this -> db -> select($query);
            return $result;
        }
        public function insert_product_index(){
            $hinhAnh = $_FILES['hinhAnh']['name'];
            $ten = $_POST['ten'];
            $gia = $_POST['gia'];

            $query = "INSERT INTO product (hinhAnh,ten,gia)
            VALUES ('$hinhAnh','$ten','$gia')";
            $result = $this -> db ->insert($query);
            return $result;
        }
        public function show_product_index(){
            $query = "Select *from product ";
            $result = $this -> db -> select($query);
            return $result;
        }

        public function insert_news(){
            $hinhAnh= $_FILES['hinhAnh']['name'];
            $tenKhuyenMai = $_POST['tenKhuyenMai'];
            $thoiGian = $_POST['thoiGian'];
            $diaDiem = $_POST['diaDiem'];

            $query = "INSERT INTO news(hinhAnh, tenKhuyenMai, thoiGian, diaDiem) VALUES('$hinhAnh','$tenKhuyenMai','$thoiGian','$diaDiem') ";
            $result = $this->db -> insert($query);
            return $result;
        }

        public function show_news(){
            $query = "SELECT *FROM news";
            $result = $this->db->select($query);
            return $result;
        }

        public function insert_menu(){
            $hinhAnh = $_FILES['hinhAnh']['name'];
            $tenSanPham = $_POST['tenSanPham'];
            $moTa = $_POST['moTa'];
            $Gia = $_POST['Gia'];

            $query = "INSERT INTO menu(hinhAnh, tenSanPham, moTa, Gia) VALUES ('$hinhAnh','$tenSanPham','$moTa','$Gia')";
            $result = $this ->db->insert($query);
            return $result;
        }

        public function show_menu(){
            $query = "SELECT *FROM menu";
            $result = $this -> db -> select($query);
            return $result;
        }

        public function insert_shopsystem(){
            $hinhAnh = $_FILES['hinhAnh']['name'];
            $Ten = $_POST['Ten'];
            $diaChi = $_POST['diaChi'];
            $dienThoai = $_POST['dienThoai'];
            $thoiGian = $_POST['thoiGian'];

            $query = "INSERT INTO shopsystem(hinhAnh,Ten, diaChi, dienThoai, thoiGian) VALUES ('$hinhAnh','$Ten','$diaChi','$dienThoai','$thoiGian')";
            $result = $this ->db->insert($query);
            return $result;
        }

        public function show_shopsystem(){
            $query = "SELECT *FROM shopsystem";
            $result = $this->db->select($query);
            return $result;
        }

        public function insert_blog(){
            $hinhAnh = $_FILES['hinhAnh']['name'];
            $Ten = $_POST['Ten'];
            $moTa = $_POST['moTa'];

            $query = "INSERT INTO blog(hinhAnh, Ten, moTa) VALUES ('$hinhAnh', '$Ten','$moTa')";
            $result = $this->db->insert($query);
            return $result;
        }

        public function show_blog(){
            $query = "SELECT *from blog";
            $result = $this -> db-> select($query);
            return $result;
        }
    }
?>



<?php


// if (isset($_POST['submit'])) {
//     // Retrieve form data
//     $hoTen = $_POST['hoTen'];
//     $ngayDatBan = $_POST['ngayDatBan'];
//     $soDienThoai = $_POST['soDienThoai'];
//     $nguoiLon = $_POST['nguoiLon'];
//     $email = $_POST['email'];
//     $treEm = $_POST['treEm'];
//     $nhaHang = $_POST['nhaHang'];
//     $chonGio = $_POST['chonGio'];
//     $chonPhut = $_POST['chonPhut'];
//     $moTa = $_POST['moTa'];

//     // You can perform database operations here to store the form data
//     // For example, using MySQLi:
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "booking";

//     $conn = new mysqli($servername, $username, $password, $dbname);

//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $sql = "INSERT INTO booking (hoTen, ngayDatBan, soDienThoai, nguoiLon, email, treEm, nhaHang, chonGio, chonPhut, moTa)
//             VALUES ('$hoTen', '$ngayDatBan', '$soDienThoai', '$nguoiLon', '$email', '$treEm', '$nhaHang',  '$chonGio', '$chonPhut', '$moTa')";

//     if ($conn->query($sql) === TRUE) {
//         echo "Đặt bàn thành công!";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }

//     $conn->close();
// }


// ?>