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

        public function insert_flashsalemain(){
            $maSach = $_POST['maSach'];
            $hinhAnh = $_FILES['hinhAnh']['name'];
            $tenSach = $_POST['tenSach'];
            $tienGiam = $_POST['tienGiam'];
            $tienGoc = $_POST['tienGoc'];
            $query = "INSERT INTO flashsalemain(maSach, hinhAnh, tenSach, tienGiam, tienGoc) values ('$maSach','$hinhAnh','$tenSach','$tienGiam','$tienGoc')";
            $result = $this->db->insert($query);
            return $result;
        }

        public function show_flashsalemain(){
            $query = "SELECT *FROM flashsalemain";
            $result = $this -> db->select($query);
            return $result;
        }

        public function insert_trendbuy(){
            $maTrendBuy = $_POST['maTrendBuy'];
            $phanTram = $_POST['phanTram'];
            $hinhAnh = $_FILES['hinhAnh']['name'];
            $tenSach = $_POST['tenSach'];
            $tienGiam 	= $_POST['tienGiam'];
            $tienGoc = $_POST['tienGoc'];

            $query = "INSERT INTO trendbuy(maTrendBuy,phanTram,hinhAnh,tenSach,tienGiam,tienGoc) values ('$maTrendBuy','$phanTram','$hinhAnh','$tenSach','$tienGiam','$tienGoc ')";

            $result = $this ->db->insert($query);
            return $result;
        }

        public function show_trendbuy(){
            $query = "SELECT *FROM trendbuy";
            $result = $this->db->select($query);
            return $result;
        }

        public function insert_sgk(){
            $maSGK = $_POST['maSGK'];
            $phanTram = $_POST['phanTram'];
            $hinhAnh = $_FILES['hinhAnh']['name'];
            $tenSach = $_POST['tenSach'];
            $tienGiam 	= $_POST['tienGiam'];
            $tienGoc = $_POST['tienGoc'];

            $query = "INSERT INTO sgk(maSGK,phanTram,hinhAnh,tenSach,tienGiam,tienGoc) values ('$maSGK','$phanTram','$hinhAnh','$tenSach','$tienGiam','$tienGoc ')";

            $result = $this ->db->insert($query);
            return $result;
        }
        public function show_sgk(){
            $query = "SELECT *FROM sgk";
            $result = $this->db->select($query);
            return $result;
        }

        public function insert_tapvo(){
            $matapvo = $_POST['matapvo'];
            $phanTram = $_POST['phanTram'];
            $hinhAnh = $_FILES['hinhAnh']['name'];
            $tenSach = $_POST['tenSach'];
            $tienGiam 	= $_POST['tienGiam'];
            $tienGoc = $_POST['tienGoc'];

            $query = "INSERT INTO tapvo(matapvo,phanTram,hinhAnh,tenSach,tienGiam,tienGoc) values ('$matapvo','$phanTram','$hinhAnh','$tenSach','$tienGiam','$tienGoc ')";

            $result = $this ->db->insert($query);
            return $result;
        }

        public function show_tapvo(){
            $query = "SELECT *FROM tapvo";
            $result = $this->db->select($query);
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